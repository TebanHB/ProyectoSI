@extends('layouts.app')
<head>
	<title>Usuarios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href={{asset('homecss/css/style.css')}}>
    <!-- JavaScript Bundle with Popper -->
    <!-- CSS only -->
</head>

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
    <div class="containercreateuser">
        <h1>Crear nuevo usuario</h1>
        <div class="card-body">
            <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="usuarioformulariocreate">
                        <label for=name>Nombre Completo: </label>
                        <input type="text" id="name">
                        <br> <br>
                        <label for="carnet">Carnet: </label>
                        <input type="text"id="carnet">
                        <br> <br>
                        <label for="email">Correo Electronico: </label>
                        <input type="email"id="email">
                        <br> <br>
                        <label for="password">Contraseña: </label>
                        <input type="password"id="password">
                        <br> <br>
                        <label for="verif">Verificar Contraseña: </label>
                        <input type="password"id="verif">
    
                        <br> <br>
                        <input type="checkbox" name="" id="Administrador1">
                        <label for="Administrador1">Administrador</label>
                        <input type="checkbox" name="" id="Vendedor1">
                        <label for="Vendedor1">Vendedor</label>
                        <input type="checkbox" name="" id="Cliente1">
                        <label for="Cliente1">Cliente</label>
                   
                    </div>
                    <button type="submit" class="btn btn-info ">
                        {{ __('Registrar') }}
                    </button>
            <!--    <a href="{{}}" class="btn btn-success">guardar</a>  Este es boton para actualizar -->
            </form>
        </div>
    </div>



@endsection
