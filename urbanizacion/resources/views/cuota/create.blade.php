@extends('home')
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
        <h1>Agendar reserva</h1>
        <div class="card-body">
            <form method="POST" action="{{ route('cuota.store') }}" enctype="multipart/form-data">
            @csrf



            <label for="monto_cuota">Monto:{{$mensual}} </label>

            <label for="amortizacion">Amortizacion: </label>
            <input type="number" id="amortizacion">
            <button type="submit" class="boton ">
            </form>
        </div>
    </div>
@endsection
