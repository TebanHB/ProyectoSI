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

            <select name="id_pago" id="select-room" class="form-control" onchange="habilitar()" >
                <option value="nulo">Usuarios</option>
                @foreach ($pagos as $pago)
                    <option value="{{$pago->id}}">
                        {{$pago->id}}
                    </option>
                @endforeach
            </select>

            <label for="monto">Monto:{{}} </label>

            <label for="amortizacion">Amortizacion: </label>
            <input type="number" id="amortizacion">

            </form>
        </div>
    </div>
@endsection
