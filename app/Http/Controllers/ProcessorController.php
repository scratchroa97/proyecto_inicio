<?php

namespace App\Http\Controllers;

use App\Models\Processor;
use Illuminate\Http\Request;

class PrecessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procesador = Processor::all();
        return view('processor.index', compact('procesador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('processor.create');
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
            'referencia' => 'required|max:20'
        ]);
        $procesador = new Processor();
        $procesador->capacity = $request->capacidad;
        $procesador->save();
        return redirect()->route('processor.index')->with('success', 'El procesador se creó correctamente!');
    }


    public function show(Processor $procesador)
    {
        return view('processor.edit', compact('processor'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Processor  $procesador
     * @return \Illuminate\Http\Response
     */
    public function edit(Processor $procesador)
    {
        return view('processor.edit', compact('processor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Processor  $procesador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Processor $procesador)
    {
        $request->validate([
            'referencia' => 'required|max:20'
        ]);

        $procesador = Processor::find($procesador->id);
        $procesador->capacity = $request->capacidad;
        $procesador->save();
        return redirect()->route('processor.index')->with('success', 'El procesador se actualizó correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Processor  $battery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Processor $procesador)
    {
        $procesador->delete();
        return redirect()->route('processor.index')->with('success', 'El procesador se eliminó correctamente.');
    }
}