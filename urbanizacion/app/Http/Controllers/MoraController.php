<?php

namespace App\Http\Controllers;

use App\Models\Mora;
use App\Models\Cuota;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\http\Controllers\NotaController;
class MoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moras= Mora::all();
        //$contratos->load("users");
        return view('mora.index', compact('moras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $cuota = Cuota::findOrFail($id);
       
        return view('mora.create',compact('cuota'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $credentials =Request()->validate([
            'multa'=>['required'],
            'retraso_dia'=>['required'],
        ]);
        $mora = Mora::create([
            'multa'=>request('multa'),
            'retraso_dia'=>request('retraso_dia'),
        ]);
       
        return redirect()->route('cuota.edit', [$id, $mora->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mora  $mora
     * @return \Illuminate\Http\Response
     */
    public function show(Mora $mora)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mora  $mora
     * @return \Illuminate\Http\Response
     */
    public function edit(Mora $mora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mora  $mora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mora $mora)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mora  $mora
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mora $mora)
    {
        //
    }
}
