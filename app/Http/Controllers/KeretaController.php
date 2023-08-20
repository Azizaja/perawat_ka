<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kereta;

class KeretaController extends Controller
{
 

    public function index()
    {
        $trains = Kereta::all();
        $active = 'master_kereta';
        return view('master_kereta.show', compact('trains', 'active'));
    }
    public function create()
    {
        //
        $active = 'master_kereta';
        return view('master_kereta.add',compact('active'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
