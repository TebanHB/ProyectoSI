<?php

namespace App\Http\Controllers;

use App\Models\Manzana;
use App\Models\Terreno;
use App\Models\Contrato;
use App\Models\User;
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
        return view('terreno.index', compact('terrenos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('terreno.create');
    }
   
    public function terrenos($id){
            
            $terrenos = Terreno::where('id_manzana',$id)->get();
            return view('terreno.index',compact('terrenos'));
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
    public function edit($id)
    {
      
        $contratos = Contrato::all();
        $terreno= Terreno::findOrFail($id);
        return view('terreno.edit', compact('terreno'), compact('contratos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Terreno  $terreno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $credentials =   Request()->validate([
            'superficie_terreno' => ['required'],
            'precio' => ['required'],
            'estado_terreno' => ['required'],
            'id_manzana' => ['required'],
        ]);
            $terreno = Terreno::findOrFail($id);
        
            $terreno->superficie_terreno = $request->get('superficie_terreno');
            $terreno->precio = $request->get('precio');
            $terreno->estado_terreno= $request->get('estado_terreno');
            $terreno->id_users = $request->get('id_user');
            $terreno->id_manzana = $request->get('id_manzana');
            $terreno->id_contrato= $request->get('id_contrato');
            $terreno->save();

        return redirect()->route('terreno.index');
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
