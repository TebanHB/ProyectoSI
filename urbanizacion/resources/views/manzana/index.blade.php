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
            @foreach ($manzanas as $manzana)
                <tr>
                    <td>{{($manzana->superficie_manzana == null)? "--": $manzana->superficie_manzana}}</td>
                    <td>{{($manzana->cantidad_de_terreno == null)? "--": $manzana->cantidad_de_terreno}}</td>
                    <td>{{($manzana->ubicacion == null)? "--": $manzana->ubicacion}}</td>
                    <td><a href="{{route('terreno.terrenoss',$manzana->id)}}">Ver terrenos</a> </td>
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
