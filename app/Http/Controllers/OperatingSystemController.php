<?php

namespace App\Http\Controllers;

use App\Models\OperatingSystem;
use Illuminate\Http\Request;

class OperatingSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operatingSystem = OperatingSystem::all();
        return view('operatingSystem.index', compact('operatingSystem'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operatingSystem.create');
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
            'os_name' => 'required'
        ]);
        $operatingSystem = new OperatingSystem();
        $operatingSystem->os_name = $request->os_name;
        $operatingSystem->save();
        return redirect()->route('operatingSystem.index')->with('success', 'El nombre Operating System se creó correctamente!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OperatingSystem  $operatingSystem
     * @return \Illuminate\Http\Response
     */
    public function show(OperatingSystem $operatingSystem)
    {
        return view('operatingSystem.edit', compact('operatingSystem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OperatingSystem  $operatingSystem
     * @return \Illuminate\Http\Response
     */
    public function edit(OperatingSystem $operatingSystem)
    {
        return view('operatingSystem.edit', compact('operatingSystem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OperatingSystem  $operatingSystem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OperatingSystem $operatingSystem)
    {
        $request->validate([
            'os_name' => 'required'
        ]);

        $operatingSystem = OperatingSystem::find($operatingSystem->id);
        $operatingSystem->os_name = $request->os_name;
        $operatingSystem->save();
        return redirect()->route('operatingSystem.index')->with('success', 'EL operating System se actualizó correctamente.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OperatingSystem  $operatingSystem
     * @return \Illuminate\Http\Response
     */
    public function destroy(OperatingSystem $operatingSystem)
    {
        $operatingSystem->delete();
        return redirect()->route('operatingSystem.index')->with('success', 'EL operatingSystem se eliminó correctamente.');
    
    }
}
