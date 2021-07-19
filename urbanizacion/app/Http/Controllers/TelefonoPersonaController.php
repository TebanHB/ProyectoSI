<?php

namespace App\Http\Controllers;

use App\Models\TelefonoPersona;
use Illuminate\Http\Request;

class TelefonoPersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telefonos = TelefonoPersona::all();
        return view('telefonoPersona.index',compact('telefonos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('telefonoPersona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credentials =   Request()->validate([
            'telefono' => ['required'],
        ]);
        TelefonoPersona::create([
            'telefono'=>request('telefono'),
            'id_users'=>request('id_users'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TelefonoPersona  $telefonoPersona
     * @return \Illuminate\Http\Response
     */
    public function show(TelefonoPersona $telefonoPersona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TelefonoPersona  $telefonoPersona
     * @return \Illuminate\Http\Response
     */
    public function edit(TelefonoPersona $telefonoPersona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TelefonoPersona  $telefonoPersona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TelefonoPersona $telefonoPersona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TelefonoPersona  $telefonoPersona
     * @return \Illuminate\Http\Response
     */
    public function destroy(TelefonoPersona $telefonoPersona)
    {
        //
    }
}
