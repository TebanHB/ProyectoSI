@extends('layouts.app')
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

    <div class="container">
        <br>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><h2>Manzanas</h2></li>
            {{-- <li class="list-group-item"><a href= {{route('user.register') }} ><button type="button" class="btn btn-success btn-lg btn-block">Nuevo usuario</button></a></li> --}}
        </ul>
        <table class="table table-striped">
            <thead>
            <th>superficie manzana</th>
            <th>cantidad de terreno</th>
            <th>ubicación</th>
            </thead>
            <tbody>
            @foreach ($ofreces as $ofrece)
                <tr>
                    <td>{{($ofrece->superficie_manzana == null)? "--": $ofrece->superficie_manzana}}</td>
                    <td>{{($ofrece->cantidad_de_terreno == null)? "--": $ofrece->cantidad_de_terreno}}</td>
                    <td>{{($ofrece->ubicacion == null)? "--": $ofrece->ubicacion}}</td>
                    {{-- <td>
                        <a href="{{route('user.permissions',$user->id)}}"><button type="button" class="btn btn-warning">Roles</button></a>
                    </td> --}}
                </tr>
            @endforeach
            </tbody>
        </table>
        {{-- <div class="table table-striped">{{$pagos->links()}}</div> --}}
    </div>
@endsection
