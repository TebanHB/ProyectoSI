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
<form class="container" method="POST" action="{{ route('mora.store') }}" enctype="multipart/form-data">
    @csrf

    <label for="multa">Multa: </label>
    <input type="number" id="multa">
    <br><br>
    <label for="retraso_dia">Retraso de días: </label>
    <input type="number" id="retraso_dia">
<<<<<<< HEAD
    <button id="botonGuardar">Guardar</button>
=======
    <br><br> <br>
    <button type="submit" class="botonesmora ">
        {{ __('Guardar') }}
   </button>
>>>>>>> 42363fcfcff2341b1e5474eac11ec79bb63e8453
</form>

</div>
@endsection
