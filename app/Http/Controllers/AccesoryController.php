<?php

namespace App\Http\Controllers;

use App\Models\Accesory;
use App\Models\Brand;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use function PHPUnit\Framework\returnSelf;

class AccesoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accesories = Accesory::all();
        return view('accesory.index', compact('accesories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors = Color::all()->sortBy('color_name');
        $brands = Brand::all()->where('type', '=', 'ambos');
        return view('accesory.create', compact('colors', 'brands'));
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
            'name' => 'required',
            'model' => 'required',
            'price' => 'required',
            'brand_id' => 'required',
            'sku'  => 'required',
            'condition' => 'required',
            'color_id'  => 'required',
            'country'  => 'required',
            'weight'  => 'required',
            'warranty' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description' => 'required'
        ]);
        $accesory = new Accesory();
        $accesory->name = $request->input('name');
        $accesory->model = $request->input('model');
        $accesory->price = $request->input('price');
        $accesory->brand_id = $request->input('brand_id');
        $accesory->sku = $request->input('sku');
        $accesory->condition = $request->input('condition');
        $accesory->color_id = $request->input('color_id');
        $accesory->country = $request->input('country');
        $accesory->weight = $request->input('weight');
        $accesory->warranty = $request->input('warranty');
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/accesories/', $filename);
            $accesory->foto = $filename;
        }
        $accesory->description = $request->input('description');
        $accesory->save();
        return redirect()->route('accesory.index')->with('success', 'Se creó el accesorio correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Accesory  $accesory
     * @return \Illuminate\Http\Response
     */
    public function show(Accesory $accesory)
    {
        return view('accesory.show', compact('accesory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accesory  $accesory
     * @return \Illuminate\Http\Response
     */
    public function edit(Accesory $accesory)
    {
        $colors = Color::all()->sortBy('color_name')->except($accesory->getColor->id);
        $brands = Brand::all()->where('type', '=', 'ambos')->except($accesory->getBrand->id);
        return view('accesory.edit', compact('accesory', 'colors', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accesory  $accesory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accesory $accesory)
    {
        $accesory = Accesory::find($accesory->id);
        $request->validate([
            'name' => 'required',
            'model' => 'required',
            'price' => 'required',
            'brand_id' => 'required',
            'sku'  => 'required',
            'condition' => 'required',
            'color_id'  => 'required',
            'country'  => 'required',
            'weight'  => 'required',
            'warranty' => 'required',
            'foto' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description' => 'required'
        ]);
        $accesory->name = $request->input('name');
        $accesory->model = $request->input('model');
        $accesory->price = $request->input('price');
        $accesory->brand_id = $request->input('brand_id');
        $accesory->sku = $request->input('sku');
        $accesory->condition = $request->input('condition');
        $accesory->color_id = $request->input('color_id');
        $accesory->country = $request->input('country');
        $accesory->weight = $request->input('weight');
        $accesory->warranty = $request->input('warranty');
        if ($request->hasFile('foto')) {
            $destination = 'uploads/accesories/' . $accesory->foto;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/accesories/', $filename);
            $accesory->foto = $filename;
        }
        $accesory->description = $request->input('description');
        $accesory->update();
        return redirect()->route('accesory.index')->with('success', 'Se actualizó el accesorio correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accesory  $accesory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accesory $accesory)
    {
        $accesory->delete();
        return redirect()->route('accesory.index')->with('success', 'Se eliminó el accesorio correctamente!');
    }
}