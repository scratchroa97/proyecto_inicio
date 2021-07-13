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
        'id_color',
        'id_brand',
        'id_screen',
        'id_ram_memory',
        'id_rom_memory',
        'id_battery',
        'id_processor',
        'id_graphic',
        'id_operating_system',
    ];

    public $timestamps = false;
}