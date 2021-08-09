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
        <h1>Agregar cuota</h1>
        <div class="card-body">
            <form method="POST" action="{{ route('cuota.update', $cuota->id) }}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="id_credito" value="{{$cuota->id_credito}}">
            <input type="hidden" name="id_mora" value= "{{$mora->id}}">
            <label for="monto_cuota">Monto: </label>
            <input type="number" name='monto_cuota' id="monto_cuota" value= "{{$cuota->monto_cuota}}">
            <label for="amortizacion">Amortizacion: </label>
            <input type="number" name='amortizacion' id="amortizacion" value= "{{$cuota->amortizacion}}">
            <button type="submit" class="botonescontrato ">
                {{ __('Guardar') }}
           </button>
            </form>
        </div>
    </div>
@endsection
