<?php

namespace App\Http\Controllers;

use App\Models\Checksheet;
use App\Models\Kereta;
use Illuminate\Http\Request;

class ChecksheetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $active = 'master_checksheet';
        $checksheets = Checksheet::all();
        return view('master_checksheet.checksheet.show', compact('active', 'checksheets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $active = 'master_checksheet';
        $keretas = Kereta::all();
        return view('master_checksheet.checksheet.add', compact('active', 'keretas'));
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
