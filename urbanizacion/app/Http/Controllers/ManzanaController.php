<?php

namespace App\Http\Controllers;

use App\Models\Manzana;
use Illuminate\Http\Request;

class ManzanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manzanas = Manzana::all();
        return view('manzana.index',compact('manzanas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('manzana.create');
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
            'superficie_manzana'=>['required'],
            'cantidad_de_terreno'=>['required'],
            'ubicacion'=>['required'],
        ]);
        Manzana::create([
            'superficie_manzana'=>request('superficie_manzana'),
            'cantidad_de_terreno'=>request('cantidad_de_terreno'),
            'ubicacion'=>request('ubicacion'),
        ]);
        return redirect()->route('manzana.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manzana  $manzana
     * @return \Illuminate\Http\Response
     */
    public function show(Manzana $manzana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manzana  $manzana
     * @return \Illuminate\Http\Response
     */
    public function edit(Manzana $manzana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manzana  $manzana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manzana $manzana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manzana  $manzana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manzana $manzana)
    {
        //
    }
}
