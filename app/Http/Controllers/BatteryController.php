<?php

namespace App\Http\Controllers;

use App\Models\Battery;
use Illuminate\Http\Request;

class BatteryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baterias = Battery::all();
        return view('battery.index', compact('baterias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('battery.create');
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
        $bateria = new Battery();
        $bateria->capacity = $request->capacidad;
        $bateria->save();
        return redirect()->route('battery.index')->with('success', 'La batería se creó correctamente!');
    }


    public function show(Battery $battery)
    {
        return view('battery.edit', compact('battery'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Battery  $battery
     * @return \Illuminate\Http\Response
     */
    public function edit(Battery $battery)
    {
        return view('battery.edit', compact('battery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Battery  $battery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Battery $battery)
    {
        $request->validate([
            'capacidad' => 'required|max:8'
        ]);

        $bateria = Battery::find($battery->id);
        $bateria->capacity = $request->capacidad;
        $bateria->save();
        return redirect()->route('battery.index')->with('success', 'La batería se actualizó correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Battery  $battery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Battery $battery)
    {
        $battery->delete();
        return redirect()->route('battery.index')->with('success', 'La batería se eliminó correctamente.');
    }
}