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
<form class="container" method="POST" action="{{ route('mora.store') }}" enctype="multipart/form-data">
    @csrf

    <label for="multa">Multa: </label>
    <input type="number" id="multa">
    <label for="retraso_dia">Retraso de días: </label>
    <input type="number" id="retraso_dia">
    <button id="botonGuardar">Guardar</button>
</form>
</div>
@endsection
