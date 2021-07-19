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
            <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
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
                        <button type="submit" class="btn btn-info ">
                            {{ __('Registrar') }}
                            <i class="fas fa-heartbeat"></i>
                        </button>
                        <input type="radio" name="" id="">Cliente
                    <input type="radio" name="" id="">Administrador 
                     <input type="radio" name="" id="">Vendedor

            <!--    <a href="{{}}" class="btn btn-success">guardar</a>  Este es boton para actualizar -->
            </form>
        </div>
    </div>



@endsection
