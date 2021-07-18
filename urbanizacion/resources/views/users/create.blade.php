@extends('layouts.app')
@section('content')
    @if ($errors->count() > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container"> 
        <h1>Crear nuevo usuario</h1> 
        <div class="card-body">
            <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="usuario">
                    <label for=name>Nombres: </label>
                    <input type="text" id="name"> 
                    <br> <br>
                    <label for="apellido">Apellidos: </label>
                    <input type="text"id="apellido">
                    <br> <br>
                    <label for="email">Correo Electronico: </label>
                    <input type="email"id="email">
                    <br> <br>
                    <label for="contra">Contraseña: </label>
                    <input type="password"id="contra">
                    <br> <br>
                    <label for="verif">Verificar Contraseña: </label>
                    <input type="password ver"id="verif">

                    <br> <br>

                    
                </div>
                
            </form>
        </div>
    </div>  

    <button class="Guardar">Guardar Contrato</button>
    <button class="cancelar">Cancelar</button>

@endsection