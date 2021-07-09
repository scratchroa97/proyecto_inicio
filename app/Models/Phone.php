<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_name',
        'phone_model',
        'fotos',
        'precio',
        'sd_slot',
        'dual_sim',
        'fast_charge',
        'color_id',
        'brand_id',
        'screen_id',
        'ram_memory_id',
        'rom_memory_id',
        'battery_id',
        'processor_id',
        'graphic_card_id',
        'operating_system_id',
    ];

    public $timestamps = true;

    public function getBattery()
    {
        return $this->hasOne(Battery::class, 'id', 'battery_id');
    }

    public function getBrand()
    {
        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }

    public function getColor()
    {
        return $this->hasOne(Color::class, 'id', 'color_id');
    }

    public function getGraphic()
    {
        return $this->hasOne(GraphicCard::class, 'id', 'graphic_card_id');
    }

    public function getOS()
    {
        return $this->hasOne(OperatingSystem::class, 'id', 'operating_system_id');
    }

    public function getProcessor()
    {
        return $this->hasOne(Processor::class, 'id', 'processor_id');
    }

    public function getRam()
    {
        return $this->hasOne(RamMemory::class, 'id', 'ram_memory_id');
    }

    public function getRom()
    {
        return $this->hasOne(RomMemory::class, 'id', 'rom_memory_id');
    }

    public function getScreen()
    {
        return $this->hasOne(Screen::class, 'id', 'screen_id');
    }
}