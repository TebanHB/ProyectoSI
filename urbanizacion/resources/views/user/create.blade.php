@extends('layouts.app')
@if ($errors->count() > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@section('content')
<div class="container">
<form class="container" method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
    @csrf
    <label for=name>Nombre completo: </label>
    <input name="name" type="text">
    <label for="carnet">Carnet: </label>
    <input name="carnet" type="text">
    <label for="email">Correo: </label>
    <input type="email" name="email">
    <label for="password">Contraseña: </label>
    <input type="password" name="password">
    <label for="tipo_administrador">Administrador</label>
    <input type="checkbox" name="tipo_administrador">
    <label for="tipo_cliente">Cliente</label>
    <input type="checkbox" name="tipo_cliente">
    <label for="tipo_vendedor">Vendedor</label>
    <input type="checkbox" name="tipo_vendedor">
    <label for="tipo_visita">Visita</label>
    <input type="checkbox" name="tipo_visita">


    <button type="submit" class="botonescontrato ">
        Guardar
    </button>
</form>
</div>
@endsection
