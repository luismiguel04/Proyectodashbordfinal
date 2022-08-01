<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensore extends Model
{
    use HasFactory;
    //protected $table = 'Sensores';
    /*   static $rules = [

        'Numser' => 'required',
        'Lugar' => 'required',
        'Modelo' => 'required',
        'Capacidad' => 'required'


    ]; */
    protected $fillable = ['Numser', 'Lugar', 'Modelo', 'Capacidad'];
};