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
            <form method="POST" action="{{ route('reserva.store') }}" enctype="multipart/form-data">
            @csrf
                <div class="reserva">
                    <select name="id_lote" id="select-room" class="form-control" onchange="habilitar()" >
                        <option value="nulo">Terrenos</option>
                        @foreach ($terrenos as $terreno)
                            <option value="{{$terreno->id}}">Codigo Terreno: {{$terreno->id}}    Codigo Manzana: {{$terreno->id_manzana}}
                            </option>
                        @endforeach
                    </select>
                    <label for="horario_de_visita">Fecha</label>
                    <input id="horario_de_visita" name = "horario_de_visita" type="datetime-local">
                    <input type="hidden" name="id_user" value="{{$user->id}}">
                </div>
                <button type="submit" class="botonescontrato ">
                    Guardar
                </button>
               

            </form>
        </div>
    </div>
@endsection
