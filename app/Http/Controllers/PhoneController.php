<?php

namespace App\Http\Controllers;

use App\Models\Battery;
use App\Models\Brand;
use App\Models\Color;
use App\Models\GraphicCard;
use App\Models\OperatingSystem;
use App\Models\Phone;
use App\Models\Processor;
use App\Models\RamMemory;
use App\Models\RomMemory;
use App\Models\Screen;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::all();
        return view('phone.index', compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colores = Color::all()->sortBy('color_name');
        $marcas = Brand::all()->sortBy('brand_name');
        $pantallas = Screen::all()->sortBy('inches');
        $rams = RamMemory::all()->sortBy('ram_capacity');
        $roms = RomMemory::all()->sortBy('rom_capacity');
        $baterias = Battery::all()->sortBy('capacity');
        $procesadores = Processor::all()->sortBy('proccesor_name');
        $graficos = GraphicCard::all()->sortBy('graphic_name');
        $ops = OperatingSystem::all()->sortBy('os_name');
        return view('phone.create', compact('colores', 'marcas', 'pantallas', 'rams', 'roms', 'baterias', 'procesadores', 'graficos', 'ops'));
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
            'phone_name' => 'required',
            'phone_model' => 'required',
            'precio' => 'required',
            'sd_slot' => 'required',
            'dual_sim' => 'required',
            'fast_charge' => 'required',
            'id_color' => 'required',
            'id_brand' => 'required',
            'id_screen' => 'required',
            'id_ram_memory' => 'required',
            'id_rom_memory' => 'required',
            'id_battery' => 'required',
            'id_processor' => 'required',
            'id_graphic' => 'required',
            'id_operating_system' => 'required',
            'fotos' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('fotos')) {
            $filenameWithExt = $request->file('fotos')->getClientOriginalName();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('fotos')->getClientOriginalExtension();

            // Filename To store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            // Upload Image$path = 
            $request->file('fotos')->storeAs('public/uploads', $fileNameToStore);
        }
        // Else add a dummy image
        else {
            $fileNameToStore = 'noimage . jpg';
        }
        $phone = new Phone();

        $phone->phone_name = $request->phone_name;
        $phone->phone_model = $request->phone_model;
        $phone->fotos = $fileNameToStore;
        $phone->precio = $request->precio;
        $phone->sd_slot = $request->sd_slot;
        $phone->dual_sim = $request->dual_sim;
        $phone->fast_charge = $request->fast_charge;
        $phone->id_color = $request->id_color;
        $phone->id_brand = $request->id_brand;
        $phone->id_screen = $request->id_screen;
        $phone->id_ram_memory = $request->id_ram_memory;
        $phone->id_rom_memory = $request->id_rom_memory;
        $phone->id_battery = $request->id_battery;
        $phone->id_processor = $request->id_processor;
        $phone->id_graphic = $request->id_graphic;
        $phone->id_operating_system = $request->id_operating_system;
        $phone->save();
        return redirect()->route('phone.index')->with('success', 'Se creó el teléfono correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function show(Phone $phone)
    {
        return view('phone.view', compact('phone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function edit(Phone $phone)
    {
        return view('phone.edit', compact('phone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phone $phone)
    {
        $request->validate([
            'phone_name' => 'required',
            'phone_model' => 'required',
            'precio' => 'required',
            'sd_slot' => 'required',
            'dual_sim' => 'required',
            'fast_charge' => 'required',
            'id_color' => 'required',
            'id_brand' => 'required',
            'id_screen' => 'required',
            'id_ram_memory' => 'required',
            'id_rom_memory' => 'required',
            'id_battery' => 'required',
            'id_processor' => 'required',
            'id_graphic' => 'required',
            'id_operating_system' => 'required',
            'fotos' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('fotos')) {
            $filenameWithExt = $request->file('fotos')->getClientOriginalName();
            // Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just Extension
            $extension = $request->file('fotos')->getClientOriginalExtension();

            // Filename To store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            // Upload Image$path = 
            $request->file('fotos')->storeAs('public/uploads', $fileNameToStore);
        }
        // Else add a dummy image
        else {
            $fileNameToStore = 'noimage . jpg';
        }
        $phone = Phone::find($phone->id);

        $phone->phone_name = $request->phone_name;
        $phone->phone_model = $request->phone_model;
        $phone->fotos = $fileNameToStore;
        $phone->precio = $request->precio;
        $phone->sd_slot = $request->sd_slot;
        $phone->dual_sim = $request->dual_sim;
        $phone->fast_charge = $request->fast_charge;
        $phone->id_color = $request->id_color;
        $phone->id_brand = $request->id_brand;
        $phone->id_screen = $request->id_screen;
        $phone->id_ram_memory = $request->id_ram_memory;
        $phone->id_rom_memory = $request->id_rom_memory;
        $phone->id_battery = $request->id_battery;
        $phone->id_processor = $request->id_processor;
        $phone->id_graphic = $request->id_graphic;
        $phone->id_operating_system = $request->id_operating_system;
        $phone->save();
        return redirect()->route('phone.index')->with('success', 'Se actualizó el teléfono correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phone $phone)
    {
        $phone->delete();
        return redirect()->route('phone.index')->with('success', 'Se eliminó el teléfono correctamente!');
    }
}