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
<form class="container" method="POST" action="{{ route('terreno.store') }}" enctype="multipart/form-data">
    @csrf
   

    <label for=superficie_terreno>Superficie del terreno: </label>
    <input name="superficie_terreno" type="text"> <br>

    <label for="precio">Precio: </label>
    <input name="precio" type="text"><br>
    <label for="estado_terreno">Estado del terreno: </label> <br>
    <label for="estado_terreno">Activo</label>
    <input type="checkbox" name="estado_terreno">
    <label for="estado_terreno">Vendido</label> <br>
    <input type="checkbox" name="estado_terreno">
    
   
   
    <button type="submit" class="botonescontrato ">
        Guardar
    </button>
</form>
</div>
@endsection
