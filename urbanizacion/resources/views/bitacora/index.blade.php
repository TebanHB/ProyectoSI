@extends('home')
@section('content')
    {{-- esto es pa mostrar errores --}}
    @if ($errors->count() > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>

    <div class="containertable">
        <br>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><h2>Lista de Usuarios</h2></li>
            {{-- <li class="list-group-item"><a href= {{route('user.register') }} ><button type="button" class="btn btn-success btn-lg btn-block">Nuevo usuario</button></a></li> --}}
        </ul>
        <spam>Nombre: </spam>
        <table class="newtable">
            <thead>

            <th>Descripcion</th>
            <th>Fecha</th>
            </thead>
            <tbody>
            @foreach ($notas as $nota)
                <tr>
                    <td>{{($nota->descripcion == null)? "--": $nota->descripcion}}</td>
                    <td>{{($nota->Fecha == null)? "--": $nota->Fecha}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
