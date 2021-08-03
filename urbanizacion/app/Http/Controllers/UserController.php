<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\http\Controllers\Bitacora;

use App\http\Controllers\Nota\NotaUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\http\Controllers\NotaController;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = User::all();
       //NotaUsuario::crear(Auth::user(),'Entro a ver los usuarios');
     //-> esta funcion  NotaController::store(Auth::user()->id,'Texto');
       return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // abre un formulario de creacion
    {
        
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // almacena los datos que son pasados por el form
    {
        $credentials =   Request()->validate([ //validar los datos
            'name' => ['required'],
            'carnet' => ['required'],
            'email' => ['required'],
            'password' => ['required'],

        ]);
        $tipo_vendedor = $request['tipo_vendedor'];
        $tipo_visita = $request['tipo_visita'];
        $tipo_cliente = $request['tipo_cliente'];
        $tipo_administrador = $request['tipo_administrador'];
        if($tipo_vendedor==null)
            $tipo_vendedor=0;
        else
            $tipo_vendedor=1;
        if($tipo_visita==null)
            $tipo_visita=0;
        else
            $tipo_visita=1;
        if($tipo_cliente==null)
            $tipo_cliente=0;
        else
            $tipo_cliente=1;
        if($tipo_administrador==null)
            $tipo_administrador=0;
        else
            $tipo_administrador=1;

       $user= User::create([
            'name'=>request('name'),
            'carnet'=>request('carnet'),
            'email'=>request('email'),
            'password'=> bcrypt(request('password')),
            'tipo_vendedor'=>$tipo_vendedor,
            'tipo_visita'=>$tipo_visita,
            'tipo_cliente'=>$tipo_cliente,
            'tipo_administrador'=>$tipo_administrador,
            'url_foto'=>null,
            'estado'=>1,
        ]);
        BitacoraController::store($user->id);
        NotaController::store(Auth::user()->id,'El administrador creo un nuevo usuario');
        //NotaController::store($user->id,'El usuario fue creado correctamente');
     //   NotaUsuario::crear($user,'Usuario creado');

        return redirect()->route('user.index');
    }
    public function prueba(Request $request){
        return $request;
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
        $users = User::where('id',$id)->get();
        $tipo="Editar";
        return view('user.personal',compact('users'),compact('tipo'));
       
    }
    public function personal($id){
        $users = User::where('id',$id)->get();
        $tipo="Ver";
       
        return view('user.personal',compact('users'),compact('tipo'));
    }



    public function Administradores(){
        $users = User::where("tipo_administrador",1)->get();
        return view('user.index',compact('users'));
    }
    public function Clientes(){
        $users = User::where("tipo_cliente",1)->get();
        return view('user.index',compact('users'));
    }
    public function Vendedores(){
        $users = User::where("tipo_vendedor",1)->get();
        return view('user.index',compact('users'));
    }
    public function Visitas(){
        $users = User::where("tipo_visita",1)->get();
        return view('user.index',compact('users'));
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
        $user=User::findOrFail($id);
        $datos=$request->only('name','carnet','email','url_foto','estado');
        $user->update($datos);
        NotaController::store(Auth::user()->id,'Los datos del usuario fueron editados correctamente');
        return redirect()->route('home');
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
