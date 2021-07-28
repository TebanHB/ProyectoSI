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
<form class="container" method="POST" action="{{ route('manzana.store') }}" enctype="multipart/form-data">
    @csrf
    <label for=superficie_manzana>Superficie de Manzana: </label>
    <input name="superficie_manzana" type="text">

    <label for="cantidad_de_terreno">Cantidad de terrenos: </label>
    <input name="cantidad_de_terreno" type="text">

    <label for="ubicacion">Ubicacion: </label>
    <input type="text" name="ubicacion">
   
    <button type="submit" class="botonescontrato ">
        Guardar
    </button>
</form>
</div>
@endsection
