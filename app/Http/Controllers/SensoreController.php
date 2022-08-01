<?php

namespace App\Http\Controllers;

use App\Models\Sensore;
use Illuminate\Http\Request;


class SensoreController extends Controller
{
    //

    public function index()
    {
        $sensores = sensore::all();
        return view('sensores.index', $sensores);
    }
}