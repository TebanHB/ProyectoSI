<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use App\Models\Pago;
use App\Models\Cuota;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // es pa mostrar las instancias que tengamos de pago en este caso
    {
        $pagos = Pago::all();
        return view('pagos.index', compact('pagos'));
    }

    public function creditoindex() // es pa mostrar las instancias que tengamos de pago en este caso
    { 
        $pagos = Pago::all();
        return view('pagos.credito.index', compact('pagos'));
    }

    public function contadoindex() // es pa mostrar las instancias que tengamos de pago en este caso
    {
        $pagos = Pago::all();
        return view('pagos.contado.index', compact('pagos'));
    }
    public function compromisoindex() // es pa mostrar las instancias que tengamos de pago en este caso
    {
        $pagos = Pago::all();
        return view('pagos.compromiso.index', compact('pagos'));
    }
    public function mypayments()
    {
        $pagos = Pago::all();
        return view('pagos.index', compact('pagos'));
    }
    public function creditopayment($id)
    {
        $codigo = Contrato::select("codigo_pago")->where("id",$id)->get(); //sacando el codigo del pago de un contrato en especifico
        $pagos = Pago::findOrFail($codigo); 
      
               return view('pagos.credito.index',compact('pagos'));
    }
    public function compromisopayment($id)
    {
        $codigo = Contrato::select("codigo_pago")->where("id",$id)->get(); //sacando el codigo del pago de un contrato en especifico
        $pagos = Pago::findOrFail($codigo); 
      
               return view('pagos.compromiso.index',compact('pagos'));
    }

    public function contadopayment($id)
    {
        $codigo = Contrato::select("codigo_pago")->where("id",$id)->get(); //sacando el codigo del pago de un contrato en especifico
        $pagos = Pago::findOrFail($codigo); 
      
               return view('pagos.contado.index',compact('pagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('pagos.create'); // esto nos manda al formulario de creacion de pago
    }
    public function creditocreate()
    {
    
        return view('pagos.credito.create');
    }
    public function contadocreate()
    {
    
        return view('pagos.contado.create');
    }

    public function compromisocreate()
    {
        return view('pagos.compromiso.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
      
         $pago = Pago::create([
            
            'tipo' => request('formadepago_id'),
            'cuota_inicial' => request('cuota_inicial'),
            'plazo' =>request('plazo'),
            'interes_anual' => request('interes_anual'),
            'cuota_mensual'=>request('cuota_mensual'),
            'fecha_Prog'=>request('fecha_Prog'),
            'fecha_inicio'=>request('fecha_inicio'),
            'fecha_ultima_cuota'=>request('fecha_ultima_cuota'),
            'estado' => request('estado'),
            'saldo_financiado' => request('saldo_financiado'),
            'monto_pagado'  =>request('monto_pagado'),
            'monto_a_pagar'  =>request('monto_a_pagar'),
            'fecha_pago_garantia'=>request('fecha_pago_garantia'),
            'fecha_a_pagar'=>request('fecha_a_pagar'),
            'monto'=>request('monto'),
            'descuento'=>request('descuento'),
            'fecha_de_pago'=>request('fecha_de_pago'),

        ]);
        //refirigimos a donde nos de la gana
        return redirect()->route('contrato.create', $pago->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function show(Pago $pago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function edit(Pago $pago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pago $pago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pago $pago)
    {
        //
    }
}
