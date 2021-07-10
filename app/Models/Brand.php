<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Brand extends Model
{
    use HasFactory;

    public function phone()
    {
        return $this->belongsToMany(Phone::class, 'id');
    }

    public function accesory()
    {
        return $this->belongsToMany(Accesory::class, 'id');
    }
}