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
                <button type="submit" class="btn btn-info ">
                    {{ __('Registrar') }}
                    <i class="fas fa-heartbeat"></i>
                </button>


            </form>
        </div>
    </div>
@endsection
