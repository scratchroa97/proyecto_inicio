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
use Illuminate\Support\Facades\File;

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
            'color_id' => 'required',
            'brand_id' => 'required',
            'screen_id' => 'required',
            'ram_memory_id' => 'required',
            'rom_memory_id' => 'required',
            'battery_id' => 'required',
            'processor_id' => 'required',
            'graphic_card_id' => 'required',
            'operating_system_id' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $phone = new Phone();
        $phone->phone_name = $request->phone_name;
        $phone->phone_model = $request->phone_model;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/phones/', $filename);
            $phone->foto = $filename;
        }
        $phone->precio = $request->precio;
        $phone->sd_slot = $request->sd_slot;
        $phone->dual_sim = $request->dual_sim;
        $phone->fast_charge = $request->fast_charge;
        $phone->color_id = $request->color_id;
        $phone->brand_id = $request->brand_id;
        $phone->screen_id = $request->screen_id;
        $phone->ram_memory_id = $request->ram_memory_id;
        $phone->rom_memory_id = $request->rom_memory_id;
        $phone->battery_id = $request->battery_id;
        $phone->processor_id = $request->processor_id;
        $phone->graphic_card_id = $request->graphic_card_id;
        $phone->operating_system_id = $request->operating_system_id;
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
        return view('phone.show', compact('phone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function edit(Phone $phone)
    {
        $colors = Color::all()->sortBy('color_name')->except($phone->getColor->id);
        $brands = Brand::all()->sortBy('brand_name')->except($phone->getBrand->id);
        $screens = Screen::all()->sortBy('inches')->except($phone->getScreen->id);
        $rams = RamMemory::all()->sortBy('ram_capacity')->except($phone->getRam->id);
        $roms = RomMemory::all()->sortBy('rom_capacity')->except($phone->getRom->id);
        $batteries = Battery::all()->sortBy('capacity')->except($phone->getBattery->id);
        $processors = Processor::all()->sortBy('proccesor_name')->except($phone->getProcessor->id);
        $graphics = GraphicCard::all()->sortBy('graphic_name')->except($phone->getGraphic->id);
        $ops = OperatingSystem::all()->sortBy('os_name')->except($phone->getOS->id);
        return view('phone.edit', compact('colors', 'brands', 'screens', 'rams', 'roms', 'batteries', 'processors', 'graphics', 'ops', 'phone'));
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
        $phone = Phone::find($phone->id);
        $request->validate([
            'phone_name' => 'required',
            'phone_model' => 'required',
            'precio' => 'required',
            'sd_slot' => 'required',
            'dual_sim' => 'required',
            'fast_charge' => 'required',
            'color_id' => 'required',
            'brand_id' => 'required',
            'screen_id' => 'required',
            'ram_memory_id' => 'required',
            'rom_memory_id' => 'required',
            'battery_id' => 'required',
            'processor_id' => 'required',
            'graphic_card_id' => 'required',
            'operating_system_id' => 'required',
            'foto' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $phone->phone_name = $request->phone_name;
        $phone->phone_model = $request->phone_model;
        if ($request->hasFile('foto')) {
            $destination = 'uploads/phones/' . $phone->foto;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/phones/', $filename);
            $phone->foto = $filename;
        }

        $phone->precio = $request->precio;
        $phone->sd_slot = $request->sd_slot;
        $phone->dual_sim = $request->dual_sim;
        $phone->fast_charge = $request->fast_charge;
        $phone->color_id = $request->color_id;
        $phone->brand_id = $request->brand_id;
        $phone->screen_id = $request->screen_id;
        $phone->ram_memory_id = $request->ram_memory_id;
        $phone->rom_memory_id = $request->rom_memory_id;
        $phone->battery_id = $request->battery_id;
        $phone->processor_id = $request->processor_id;
        $phone->graphic_card_id = $request->graphic_card_id;
        $phone->operating_system_id = $request->operating_system_id;
        $phone->update();
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