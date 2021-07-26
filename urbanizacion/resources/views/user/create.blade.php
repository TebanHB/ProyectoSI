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
<<<<<<< HEAD
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
=======
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
                    <input type="password"id="verif">

                    <br> <br>
                </div>
                        <button type="submit" class="btn btn-info ">
                            {{ __('Registrar') }}
                            <i class="fas fa-heartbeat"></i>
                        </button>
                        
                        <div id="tipousuario">
                            <h5>Tipo de usuario: </h5> 
                            <input type="radio" name="usuario" id="cliente">
                            <label for = "cliente">Cliente</label>
                            <input type="radio" name="usuario" id="vendedor">
                            <label for = "vendedor">Vendedor</label>
                             <input type="radio" name="usuario" id="administrador">
                             <label for = "administrador">Administrador</label>
                        </div>
                

>>>>>>> 0a62a1da43d1204bdc58023cd3a6b2dc49af5616
            <!--    <a href="{{}}" class="btn btn-success">guardar</a>  Este es boton para actualizar -->
            </form>
        </div>
    </div>



@endsection
