<?php

namespace App\Http\Controllers;

use App\Models\RomMemory;
use Illuminate\Http\Request;

class RomMemoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roms = RomMemory::all()->sortBy('rom_capacity');
        return view('rom.index', compact('roms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rom.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'capacidad' => 'required|max:8'
        ]);
        $rom = new RomMemory();
        $rom->rom_capacity = $request->capacidad;
        $rom->save();
        return redirect()->route('rom.index')->with('success', 'La memoria rom se creó correctamente!');
    }


    public function show(RomMemory $rom)
    {
        return view('rom.edit', compact('rom'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RomMemory  $battery
     * @return \Illuminate\Http\Response
     */
    public function edit(RomMemory $rom)
    {
        return view('rom.edit', compact('rom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RomMemory  $rom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RomMemory $rom)
    {
        $request->validate([
            'capacidad' => 'required|max:8'
        ]);

        $rom = RomMemory::find($rom->id);
        $rom->rom_capacity = $request->capacidad;
        $rom->update();
        return redirect()->route('rom.index')->with('success', 'La memoria rom se actualizó correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RomMemory  $battery
     * @return \Illuminate\Http\Response
     */
    public function destroy(RomMemory $rom)
    {
        $rom->delete();
        return redirect()->route('rom.index')->with('success', 'La memoria rom se eliminó correctamente.');
    }
}