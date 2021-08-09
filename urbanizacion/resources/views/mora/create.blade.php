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
    <div class="card-body">
        <h1 class="Titulo_Contrato">Crear Mora</h1>
<form class="container" method="POST" action="{{ route('mora.store',$cuota->id) }}" enctype="multipart/form-data">
    @csrf

    <label for="multa">Multa: </label>
    <input type="number" name = "multa" id="multa">
    <br><br>
    <label for="retraso_dia">Retraso de días: </label>
    <input type="number" name= "retraso_dia" id="retraso_dia">
    <br><br> <br>
    <input type="hidden" name="id_cuota" value="{{$cuota->id}}">
    <button type="submit" class="botonesmora ">
        {{ __('Guardar') }}
   </button>
</form>

</div>
@endsection
