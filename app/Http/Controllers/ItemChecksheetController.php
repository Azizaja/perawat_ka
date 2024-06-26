<?php

namespace App\Http\Controllers;

use App\Models\Item_checksheet;
use App\Models\Kategori_checksheet;
use App\Models\Kereta;
use Illuminate\Http\Request;

class ItemChecksheetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $items = Item_checksheet::select('item_checksheet.*', 'master_kereta.nama_kereta', 'kategori_checksheet.nama')
            ->join('kategori_checksheet', 'item_checksheet.id_kategori_checksheet', '=', 'kategori_checksheet.id')
            ->join('master_kereta', 'kategori_checksheet.id_kereta', '=', 'master_kereta.id')
            ->get();
        $items = $items->map(function ($item) {
            $kereta = Kereta::find($item->id_kereta)->first();
            $car_index = json_decode($item->car_index);
            //find in $kereta->car find by index in $car_index then combine {index:x, name:y}
            $car_name = $kereta->car;
            $car_name = json_decode($car_name);
            $car = [];
            if ($car_index) {
                foreach ($car_index as $key) {
                    $car[] = $car_name[$key];
                }
            }
            $item->car = implode(', ', $car);
            return $item;
        });

        $keretas = Kereta::all();
        $active = 'master_checksheet';
        return view('master_checksheet.itemchecksheet.index', compact('active', 'items', 'keretas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();
        $active = 'master_checksheet';
        $keretas = Kereta::all();
        $kategories = Kategori_checksheet::all();
        $cars = Kereta::where('id', $user->id_kereta)->first();
        $cars = json_decode($cars->car);
        return view('master_checksheet.itemchecksheet.add', compact('active', 'keretas', 'kategories', 'cars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_item' => 'required',
            'id_kereta' => 'required',
            'id_kategori_checksheet' => 'required'
        ], [
            'nama_item.required' => 'Uraian Pekerjaan tidak boleh kosong',
            'id_kereta.required' => 'Nama kereta tidak boleh kosong',
            'id_kategori_checksheet.required' => 'Nama kategori tidak boleh kosong'
        ]);
        // dd($request->all());
        $request['car_index'] = json_encode($request->car_index);
        Item_checksheet::create($request->all());
        return redirect()->route('item_checksheet.index')->with('status', 'Data Item Checksheet berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $items = Item_checksheet::find($id);
        $keretas = Kereta::all();
        $kategories = Kategori_checksheet::all();
        $active = 'master_checksheet';
        $cars = Kereta::where('id', $items->id_kereta)->first();
        $cars = json_decode($cars->car);
        return view('master_checksheet.itemchecksheet.edit', compact('active', 'items', 'keretas', 'kategories', 'cars', 'cars'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nama_item' => 'required',
            'id_kereta' => 'required',
            'id_kategori_checksheet' => 'required'
        ], [
            'nama_item.required' => 'Nama item tidak boleh kosong',
            'id_kereta.required' => 'Nama kereta tidak boleh kosong',
            'id_kategori_checksheet.required' => 'Nama kategori tidak boleh kosong'
        ]);
        // dd($request->all());
        Item_checksheet::where('id', $id)
            ->update([
                'nama_item' => $request->nama_item,
                'id_kereta' => $request->id_kereta,
                'id_kategori_checksheet' => $request->id_kategori_checksheet,
                'standar' => $request->standar,
                'harian' => $request->harian,
                'p1' => $request->p1,
                'p3' => $request->p3,
                'p6' => $request->p6,
                'p12' => $request->p12,
                'car_index' => $request->car_index
            ]);
        return redirect()->route('item_checksheet.index')->with('status', 'Data Item Checksheet berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Item_checksheet::destroy($id);
        return redirect()->route('item_checksheet.index')->with('status', 'Data Item Checksheet berhasil dihapus!');
    }

    public function filter($id)
    {
        // $kategories = Kategori_checksheet::where('id_kereta', $keretaId)->get();
        $items = Item_checksheet::select('item_checksheet.*', 'master_kereta.nama_kereta', 'kategori_checksheet.nama')
            ->join('kategori_checksheet', 'item_checksheet.id_kategori_checksheet', '=', 'kategori_checksheet.id')
            ->join('master_kereta', 'kategori_checksheet.id_kereta', '=', 'master_kereta.id')->where('kategori_checksheet.id_kereta', $id)
            ->get();
        $keretas = Kereta::all();
        $active = 'master_checksheet';
        return view('master_checksheet.itemchecksheet.index', compact('items', 'keretas', 'active'));
    }
}
