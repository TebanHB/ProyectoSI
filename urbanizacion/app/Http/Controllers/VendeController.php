<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vende;
use App\Models\Terreno;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class VendeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Vende::all();
        $ventas->load('user');
        return view('vende.index',compact('ventas'));
    }
    public function misventas(){
        $id=Auth::user()->id;
        $user = User::findOrFail($id);
        $ventas = Vende::where('id_user',$id)->get();
        $ventas->load('user');
        return view('vende.index',compact('ventas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user = User::findOrFail($id);
        $terrenos = Terreno::all();
        return view('vende.create', compact('user'),compact('terrenos'));
    }
   /* public function ventas($id){
        $ventas = User::where('id_user',$id)->get();
        $terrenos= Terreno::where('id_users',$id)->get();
        return view('vende.index',compact('ventas'),compact('terrenos'));
    }*/
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credentials =   Request()->validate([ //validar los datos
            'id_user' => ['required'],
            'id_lote' => ['required'],
            'comision' => ['required'],
            'password' => ['required'],

        ]);
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
