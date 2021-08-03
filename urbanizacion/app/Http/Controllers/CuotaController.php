<?php

namespace App\Http\Controllers;

use App\Models\Cuota;
use App\Models\Mora;
use App\Models\Pago;
use Illuminate\Http\Request;

class CuotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuotas = Cuota::all();

        return view('cuota.index',compact('cuotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $credito= Pago::findOrFail($id);
        return view('cuota.create', compact('credito'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cuotas($id){
        $cuotas = Cuota::where('id_credito',$id)->get();
        return view('cuota.index',compact('cuotas'));
    }
    public function moras($id){
        $moras = Mora::where('id',$id)->get();
        return view('mora.index',compact('moras'));
    }
    public function store(Request $request)
    {
        $credentials =   Request()->validate([ //validar los datos
            'id_credito' => ['required'],
         
            'amortizacion' => ['required'],
            'monto_cuota' => ['required'],
        ]);

        Cuota::create([
            'id_credito'=>request('id_credito'),
            'id_mora'=>request('id_mora'),
            'amortizacion'=>request('amortizacion'),
            'monto_cuota'=> bcrypt(request('monto_cuota')),

        ]);
        return redirect()->route('cuota.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuota  $cuota
     * @return \Illuminate\Http\Response
     */
    public function show(Cuota $cuota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuota  $cuota
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuota $cuota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cuota  $cuota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuota $cuota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuota  $cuota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuota $cuota)
    {
        //
    }
}
