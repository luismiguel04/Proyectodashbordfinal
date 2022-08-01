<?php

namespace App\Http\Controllers;

use App\Models\Sensore;
use App\Models\Vsensore;


use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $sensores = vsensore::all();
        $data =  [];


        foreach ($sensores as $sensor) {

            $data['label'][] = $sensor->Lugar;
            $data['data'][] = $sensor->cantidad;
        }
        $data['data'] =  json_encode($data);

        return view('dashboard', $data);
    }

    /*  public function chars()
    {
        $sensores = Sensores::all();
        $data =  [];

        foreach ($sensores as $sensor) {
            $data['label'][] = $sensor->Id;
            $data['data'][] = $sensor->Lugar;
        }
        $data['data'] = json_encode($data);
        return view('dashboard', $data);
    } */
}