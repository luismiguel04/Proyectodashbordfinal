<?php

namespace App\Http\Controllers;

use App\Models\Sensore;

use App\Models\Provedor;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\See;

/**
 * Class CuentaController
 * @package App\Http\Controllers
 */
class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuentas = Sensore::paginate();

        return view('cuenta.index', compact('cuentas'))
            ->with('i', (request()->input('page', 1) - 1) * $cuentas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cuenta = new Sensore();


        return view('cuenta.create', compact('cuenta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sensore::$rules);

        $cuenta = Sensore::create($request->all());

        return redirect()->route('cuentas')
            ->with('success', 'Cuenta creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id)
    {
        $cuenta = Sensore::find($Id);

        return view('cuenta.show', compact('cuenta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id)
    {
        $cuenta = Sensore::find($Id);


        return view('cuenta.edit', compact('cuenta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cuenta $cuenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)

    {

        request()->validate(Sensore::$rules);

        // $cuenta = Sensore::find($Id);
        $request()->update($request->all());
        /*     $cuenta->Numser = $request->input('Nunser');
        $cuenta->Lugar = $request->input('Lugar');
        $cuenta->Modelo = $request->input('Modelo');
        $cuenta->Capacidad = $request->input('Capacidad'); */
        //$cuenta->update();
        // $cuenta->update();
        // $cuenta = Sensore::update($request->all());


        return redirect()->route('cuentas');
        //  ->with('success', 'Cuenta actualizada exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($Id)

    {
        $cuenta = Sensore::find($Id);
        if ($cuenta->delete()) {
            //mensaje de eliminado con exito
            return redirect()->route('cuentas');
        } else {
            // alert('mensaje de error al eliminar.');
        }
        /*  Sensore::destroy($cuenta);
        $cuenta->delete();
 */
        // Sensore::destroy($cuentas);



        // return redirect()->route('cuentas');
    }
}