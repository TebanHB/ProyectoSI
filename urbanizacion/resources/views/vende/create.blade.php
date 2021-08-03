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
<form class="container" method="POST" action="{{ route('vende.store') }}" enctype="multipart/form-data">
    @csrf
   
    <input type="hidden" name="id_user" value="{{$user->id}}">

        <select name="id_lote" id="select-room" class="form-control" onchange="habilitar()" >
            <option value="nulo">Terrenos</option>
            @foreach ($terrenos as $terreno)
                <option value="{{$terreno->id}}">Codigo Terreno: {{$terreno->id}}    Codigo Manzana: {{$terreno->id_manzana}}
                </option>
            @endforeach
        </select>
    <label for="comision">comision: </label>
    <input name="comision" type="text">
   

    <button type="submit" class="botonescontrato ">
        Guardar
    </button>
</form>
</div>
@endsection
