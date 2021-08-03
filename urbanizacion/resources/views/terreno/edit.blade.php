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
<form class="container" method="POST" action="{{ route('terreno.update', $terreno->id ) }}" enctype="multipart/form-data">
    @csrf
   

    <label for=superficie_terreno>Superficie del terreno: </label>
    <input name="superficie_terreno" type="text" value = "{{$terreno->superficie_terreno}}"> <br>
    <label for=id_manzana>Numero de Manzana: </label>
    <input name="id_manzana" type="text" value = "{{$terreno->id_manzana}}"> <br>
    <label for="precio">Precio: </label>
    <input name="precio" type="text" value = "{{$terreno->precio}}"><br>
    <label for="estado_terreno">Terreno comprado: </label> <br>
    <label for="estado_terreno">Si</label>
    <input type="radio" name="estado_terreno" value = "ocupado">
    <br>
    <label for="estado_terreno">No</label> 
    <input type="radio" name="estado_terreno" value = "libre">
    
    <br><br>
    <div id="Datos_cliente">

        <select name="id_contrato" id="select-room" class="form-control" onchange="habilitar()" >
            <option value="nulo">Contratos</option>

            @foreach ($contratos as $contrato)

                <option value="{{$contrato->id}}">

                    {{$contrato->id}}

                </option>

            @endforeach
        </select>

        
        <input type="hidden" name="id_user" value="{{$contrato->id_user}}">
    </div>
    <button type="submit" class="botonescontrato ">
        Guardar
    </button>
</form>
</div>
@endsection
