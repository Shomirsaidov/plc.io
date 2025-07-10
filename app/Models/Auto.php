<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'vin', 
        'lot', 
        'location', 
        'date', 
        'state', 
        'damages', 
        'sale_type', 
        'doc_type', 
        'min_price', 
        'avg_price', 
        'max_price', 
        'make', 
        'model', 
        'year', 
        'body', 
        'mileage', 
        'fuel_type', 
        'transmission', 
        'drive', 
        'keys_', 
        'engine', 
        'color', 
        'width', 
        'length', 
        'height', 
        'weight', 
        'seats', 
        'speed', 
        'description',
        'images'
    ];
    


    protected $casts = [
        'images' => 'array'
    ];

}
