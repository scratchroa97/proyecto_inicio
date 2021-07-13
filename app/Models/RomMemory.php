<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RomMemory extends Model
{
    use HasFactory;

    public function phone()
    {
        return $this->belongsToMany(Phone::class, 'id');
    }
}