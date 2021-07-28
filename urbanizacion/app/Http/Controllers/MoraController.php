<?php

namespace App\Http\Controllers;

use App\Models\Mora;
use App\Models\User;
use App\Models\Cuota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function create()
    {
        $user = User::findOrFail(Auth::user()->id);
        $moras = Mora::all();
        return view('mora.create',compact('user'), compact('moras'));
    }

    public function moras($id){
        $moras= Cuota::where('id_mora',$id)->get();
        return view('mora.index',compact('moras'));
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
            'multa'=>['required'],
            'retraso_dia'=>['required'],
        ]);
        Mora::create([
            'multa'=>request('multa'),
            'retraso_dia'=>request('retraso_dia'),
        ]);
        return redirect()->route('mora.index');
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
