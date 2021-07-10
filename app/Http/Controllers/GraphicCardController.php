<?php

namespace App\Http\Controllers;

use App\Models\GraphicCard;
use Illuminate\Http\Request;

class GraphicCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $graphicCard = GraphicCard::all();
        return view('graphicCard.index', compact('graphicCard'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('graphicCard.create');
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
            'graphicname' => 'required',
            'description' => 'required'
        ]);
        $graphicCard = new GraphicCard();
        $graphicCard->graphic_name = $request->graphicname;
        $graphicCard->description = $request->description;
        $graphicCard->save();
        return redirect()->route('graphicCard.index')->with('success', 'La graphic Card se creó correctamente!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GraphicCard  $graphicCard
     * @return \Illuminate\Http\Response
     */
    public function show(GraphicCard $graphicCard)
    {
        return view('graphicCard.edit', compact('graphicCard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GraphicCard  $graphicCard
     * @return \Illuminate\Http\Response
     */
    public function edit(GraphicCard $graphicCard)
    {
        return view('graphicCard.edit', compact('graphicCard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GraphicCard  $graphicCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GraphicCard $graphicCard)
    {
        $request->validate([
            'graphicname' => 'required',
            'description' => 'required'
        ]);

        $graphicCard = GraphicCard::find($graphicCard->id);
        
        $graphicCard->graphic_name = $request->graphicname;
        $graphicCard->description = $request->description;

        $graphicCard->save();
        return redirect()->route('brand.index')->with('success', 'La graphic Card se actualizó correctamente.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GraphicCard  $graphicCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(GraphicCard $graphicCard)
    {
        $graphicCard->delete();
        return redirect()->route('graphicCard.index')->with('success', 'La graphic Card se eliminó correctamente.');
    
    }
}
