<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculos;

class vehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = Vehiculos::orderBy('id','ASC')->paginate(5);
        
        return view('admin.vehiculos.vehiculos')->with('vehiculos',$vehiculos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculo = new Vehiculos();
        
        $vehiculo->placa = $request->placa;
        $vehiculo->tarjeta_operacion = $request->tarjetaop;
        $vehiculo->soat = $request->soat;
        $vehiculo->licencia_transito = $request->licencia;
        $vehiculo->seguro_contractual = $request->segurocont;
        $vehiculo->seguro_extra_contractual = $request->seguroextr;
        $vehiculo->tecnomecanica =$request->tecnomecanica;
        $vehiculo->seguro_riesgos = $request->segurories;
        $vehiculo->type = $request->tipocarro;
        $vehiculo->url_foto_1 = "";
        $vehiculo->url_foto_2 = "";
        $vehiculo->save();


        $vehiculos = Vehiculos::orderBy('id','ASC')->paginate(5);
        
        return view('admin.vehiculos.vehiculos')->with('vehiculos',$vehiculos);

         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
