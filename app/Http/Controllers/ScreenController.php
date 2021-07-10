<?php

namespace App\Http\Controllers;

use App\Models\Screen;
use Illuminate\Http\Request;

class ScreenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $screen = Screen::all();
        return view('screen.index', compact('screen'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('screen.create');
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
            'inches' => 'required'
        ]);
        $screen = new Screen();
        $screen->inches = $request->inches;
        $screen->save();
        return redirect()->route('screen.index')->with('success', 'La pantalla se creó correctamente!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function show(Screen $screen)
    {
        return view('screen.edit', compact('screen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function edit(Screen $screen)
    {
        return view('screen.edit', compact('screen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Screen $screen)
    {
        $request->validate([
            'inches' => 'required'
        ]);

        $screen = Screen::find($screen->id);
        $screen->inches = $request->inches;
        $screen->save();
        return redirect()->route('inches.index')->with('success', 'La pantalla se actualizó correctamente.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Screen  $screen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Screen $screen)
    {
        $screen->delete();
        return redirect()->route('screen.index')->with('success', 'La pantalla se eliminó correctamente.');
    }
}
