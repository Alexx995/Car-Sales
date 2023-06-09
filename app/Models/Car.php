<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'registration_licence',
        'brand',
        'model',
        'manufacture_date',
        'description',
        'category_id',
        'properties',
    ];
}
