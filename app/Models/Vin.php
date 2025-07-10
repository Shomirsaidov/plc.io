<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vin extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'year',
        'fuel',
        'vehicle',
        'doors',
        'engine_si',
        'engine_nom',
        'horses',
        'kilowatts',
        'images',
        'vin'
    ];
}
