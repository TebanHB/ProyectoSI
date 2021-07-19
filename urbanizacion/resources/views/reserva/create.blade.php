@extends('layouts.app')
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
                            <option value="{{$terreno->id}}">
                                Codigo Terreno: {{$terreno->id}}    Codigo Manzana: {{$terreno->id_manzana}}
                            </option>
                        @endforeach
                    </select>
                    <label for="horario_de_visita">Fecha</label>
                    <input id="horario_de_visita" type="datetime-local">
                    <select name="id_user" id="select-room" class="form-control" onchange="habilitar()" >
                        <option value="nulo">Usuarios</option>
                        @foreach ($users as $user)
                            <option value="{{$user->id}}">
                                {{$user->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button class="botonGuardar">Guardar reserva</button>
                <button class="botoncancelar">Cancelar</button>
                <a href="{{route('laboratory.create', $plan->id)}}" class="btn btn-success">Guardar</a>

            </form>
        </div>
    </div>
@endsection
