<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use App\Models\Pago;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contratos = Contrato::all();
        $contratos->load('user');
        return view('contrato.index', compact('contratos'));
    }
    public function pendiente(){
        $contratos = Contrato::where('estado',0)->get();
        $contratos->load('user');
        return view('contrato.index',compact('contratos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $users = User::all();
        $pago = Pago::findOrFail($id);

        //dd($user);
        return view('contrato.create', compact('users'), compact('pago'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credentials =   Request()->validate([ //validar los datos
            'monto' => ['required'],
            'fecha_adjudicacion' => ['required'],
            'estado' => ['required'],
        ]);
        Contrato::create([
            
            'monto' => request('monto'),
            'fecha_adjudicacion' => request('fecha_adjudicacion'),
            'estado' => request('estado'),
            'codigo_pago' => request('pago_id'),
            'id_user' => request('id_users'),
        ]);
        return redirect()->route('contrato.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function show(Contrato $contrato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function edit(Contrato $contrato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contrato $contrato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contrato $contrato)
    {
        //
    }
}
