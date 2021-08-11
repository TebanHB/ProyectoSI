<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\User;
use App\Models\Terreno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\http\Controllers\NotaController;
class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas=Reserva::all();
        $reservas->load('user');
        return view('reserva.index',compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user = User::findOrFail($id);
        $terrenos =Terreno::where('estado_terreno','libre')->get();
        return view('reserva.create',compact('user'),compact('terrenos'));
    }
    public function misreservas($id){
        
        $user = User::findOrFail($id);
        $reservas = Reserva::where('id_user',$id)->get();
        $reservas->load('user');
        return view('reserva.index',compact('reservas'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credentials =Request()->validate([
            'horario_de_visita'=>['required'],
        ]);
        Reserva::create([
            'id_user'=>request('id_user'),
            'id_lote'=>request('id_lote'),
            'horario_de_visita'=>request('horario_de_visita'),
        ]);
        return redirect()->route('reserva.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reserva)
    {
        //
    }
}
