<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kereta;
use Illuminate\Support\Facades\Hash;

class KeretaController extends Controller
{


    public function index()
    {
        $keretas = Kereta::all();
        $active = 'master_kereta';
        return view('master_kereta.index', compact('keretas', 'active'));
    }
    public function create()
    {
        //
        $active = 'master_kereta';
        return view('master_kereta.add', compact('active'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //save to database
        $request->validate([
            // 'username' => 'required',
            // 'password' => 'required',
            'nama_kereta' => 'required',
            'nomor_kereta' => 'required',
            'car' => 'required',
            // 'foto' => 'required',
        ], [
            // 'username.required' => 'Username tidak boleh kosong',
            // 'password.required' => 'Password tidak boleh kosong',
            'nama_kereta.required' => 'Nama kereta tidak boleh kosong',
            'nomor_kereta.required' => 'Nomor kereta tidak boleh kosong',
            'car.required' => 'Car tidak boleh kosong',
            // 'foto.required' => 'Foto tidak boleh kosong',
        ]);
        // Kereta::create($request->all());

        // $file = $request->file('foto');
        // if ($file) {
        //     //generate random name and upload in folder public/img
        //     $file_name = time() . "_" . $file->getClientOriginalName();
        //     $file->move('img', $file_name);
        //     $foto = $file_name;
        // }else{
        //     $foto = null;
        // }


        $nomor_keretas = json_encode($request->nomor_kereta);
        $car = json_encode($request->car);
        $kereta = new Kereta;
        $kereta->username = $request->username;
        $kereta->password = Hash::make($request->password);
        // $kereta->password = $request->password;
        $kereta->nama_kereta = $request->nama_kereta;
        $kereta->nomor_kereta = $nomor_keretas;
        $kereta->car = $car;
        // $kereta->foto = $foto;
        $kereta->save();
        // dump($kereta);

        return redirect()->route('kereta.index')->with('status', 'Data Kereta berhasil ditambahkan!');
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
        $keretas = Kereta::find($id);

        // If nomor_kereta is a string that should be split into an array
        // if (is_string($kereta->nomor_kereta)) {
        //     // Assuming the string is comma-separated
        //     $kereta->nomor_kereta = explode(',', $kereta->nomor_kereta);
        // }

        if (isset($keretas->nomor_kereta)) {
            $keretas->nomor_kereta = json_decode($keretas->nomor_kereta);
        } else {
            $keretas->nomor_kereta = [];
        }

        if (isset($keretas->car)) {
            $keretas->car = json_decode($keretas->car);
        } else {
            $keretas->car = [];
        }

        $active = 'master_kereta';
        return view('master_kereta.edit', compact('keretas', 'active'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kereta' => 'required',
            'nomor_kereta' => 'required',
            'car' => 'required',
        ], [
            'nama_kereta.required' => 'Nama kereta tidak boleh kosong',
            'nomor_kereta.required' => 'Nomor kereta tidak boleh kosong',
            'car.required' => 'Car tidak boleh kosong',
        ]);

        $kereta = Kereta::find($id);
        $kereta->nama_kereta = $request->nama_kereta;
        $kereta->nomor_kereta = $request->nomor_kereta;
        $kereta->car = $request->car;
        $kereta->save();

        return redirect()->route('kereta.index')->with('status', 'Data Kereta berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Kereta::destroy($id);
        return redirect()->route('kereta.index')->with('status', 'Data Kereta berhasil dihapus!');
    }

    // hapusnomor
    public function hapusnomor(Request $request)
    {

        dd($request->all());
        $kereta = Kereta::find($request->id);
        $nomor_kereta = json_decode($kereta->nomor_kereta);
        $nomor_kereta = array_diff($nomor_kereta, [$request->nomor_kereta]);
        $kereta->nomor_kereta = json_encode(array_values($nomor_kereta));
        $kereta->save();
        return redirect()->route('kereta.edit', $request->id)->with('status', 'Nomor Kereta berhasil dihapus!');
    }
}
