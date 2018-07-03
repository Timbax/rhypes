<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculos;
use App\Conductor;
use App\Reserva;

class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
            
    public function index()
    {
 $reservas = Reserva::orderBy('id','ASC')->paginate(5);

              

            return view('admin.reservas.reserva')->with('reservas',$reservas);     

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
        $reserva = new Reserva();

        $reserva->fecha_inicio_servicio = $request->datereserva;
        $reserva->hora_inicio_servicio = $request->horareserva;
        $reserva->origen = $request->ciudadorigen;
        $reserva->destino = $request->ciudaddestino;
        $reserva->conductor_id = $request->conductor1;
        $reserva->vehiculo_id = $request->vehiculo1;
        $reserva->user_id = 1;

        $reserva->save();

        $reservas = Reserva::orderBy('id','ASC')->paginate(5);

        return view('admin.reservas.reserva')->with('reservas',$reservas);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           
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
