<?php

namespace App\Http\Controllers;

use App\Models\ram;
use App\Models\RamMemory;
use Illuminate\Http\Request;

class RamMemoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ram = RamMemory::all();
        return view('ram.index', compact('ram'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ram.create');
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
        $ram = new RamMemory();
        $ram->capacity = $request->capacidad;
        $ram->save();
        return redirect()->route('ram.index')->with('success', 'La memoria RAM se creó correctamente!');
    }


    public function show(RamMemory $ram)
    {
        return view('ram.edit', compact('ram'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ram  $ram
     * @return \Illuminate\Http\Response
     */
    public function edit(RamMemory $ram)
    {
        return view('ram.edit', compact('ram'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ram  $ram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RamMemory $ram)
    {
        $request->validate([
            'capacidad' => 'required|max:8'
        ]);

        $ram = RamMemory::find($ram->id);
        $ram->capacity = $request->capacidad;
        $ram->save();
        return redirect()->route('ram.index')->with('success', 'La memoria RAM se actualizó correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ram  $ram
     * @return \Illuminate\Http\Response
     */
    public function destroy(RamMemory $ram)
    {
        $ram->delete();
        return redirect()->route('ram.index')->with('success', 'La memoria RAM se eliminó correctamente.');
    }
}