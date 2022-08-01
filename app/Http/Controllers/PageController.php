<?php

namespace App\Http\Controllers;

use App\Models\Sensore;
use App\Models\Vsensore;





class PageController extends Controller
{
    /**
     * Display icons page
     *
     * @return \Illuminate\View\View
     */
    public function icons()
    {
        return view('pages.icons');
    }

    /**
     * Display maps page
     *
     * @return \Illuminate\View\View
     */
    public function maps()
    {
        return view('pages.maps');
    }

    /**
     * Display tables page
     *
     * @return \Illuminate\View\View
     */

    public function tables()
    {
        $sensores = sensore::paginate();


        return view('pages.tables', compact('sensores'))
            ->with('i', (request()->input('page', 1) - 1) * $sensores->perPage());
    }
    public function destroy($id)
    {
        $cuenta = Sensore::destroy($id);

        /* 

        if ($cuenta) {

            return redirect()->route('pages.tables')
                ->with('success', 'Cuenta elimiada exitosamente');
        } else {
            return redirect()->route('cuentas.index')->with(array(
                "message" => "La cuenta que trata de eliminar no existe"
            ));
        } */
    }
    public function show($id)
    {
        $cuenta = sensore::find($id);

        return view('cuenta.show', compact('cuenta'));
    }

    /**
     * Display notifications page
     *
     * @return \Illuminate\View\View
     */
    public function notifications()
    {
        return view('pages.notifications');
    }

    /**
     * Display rtl page
     *
     * @return \Illuminate\View\View
     */
    public function rtl()
    {
        return view('pages.rtl');
    }

    /**
     * Display typography page
     *
     * @return \Illuminate\View\View
     */
    public function typography()
    {
        return view('pages.typography');
    }

    /**
     * Display upgrade page
     *
     * @return \Illuminate\View\View
     */
    public function upgrade()
    {
        return view('pages.upgrade');
    }
    public function graficas()
    {
        $sensores = vsensore::all();
        $data =  [];


        foreach ($sensores as $sensor) {

            $data['label'][] = $sensor->Lugar;
            $data['data'][] = $sensor->cantidad;
        }
        $data['data'] =  json_encode($data);


        return view('pages.graficas', $data);
    }
}