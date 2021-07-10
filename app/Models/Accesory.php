<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accesory extends Model
{
    use HasFactory;

    public function getBrand()
    {
        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }

    public function getColor()
    {
        return $this->hasOne(Color::class, 'id', 'color_id');
    }
}