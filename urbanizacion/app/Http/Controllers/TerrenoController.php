<?php

namespace App\Http\Controllers;

use App\Models\Terreno;
use Illuminate\Http\Request;

class TerrenoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terrenos=Terreno::all();
        return view(terreno.index, compact('terrenos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('terreno.register');
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
            'superficie_terreno' => ['required'],
            'precio' => ['required'],
            'estado_terreno' => ['required'],
        ]);
        Terreno::create([
            'superficie_terreno'=>request('superficie_terreno'),
            'precio'=>request('precio'),
            'estado_terreno'=>request('estado_terreno'),
            'id_users'=>request('id_users'),
            'id_manzana'=>request('id_manzana'),
            'id_contrato'=>request('id_contrato'),
        ]);
        return redirect()->route('terreno.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Terreno  $terreno
     * @return \Illuminate\Http\Response
     */
    public function show(Terreno $terreno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Terreno  $terreno
     * @return \Illuminate\Http\Response
     */
    public function edit(Terreno $terreno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Terreno  $terreno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Terreno $terreno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Terreno  $terreno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Terreno $terreno)
    {
        //
    }
}
