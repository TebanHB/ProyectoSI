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
        <li class="list-group-item"><h2>Reservas</h2></li>
        {{-- <li class="list-group-item"><a href= {{route('user.register') }} ><button type="button" class="btn btn-success btn-lg btn-block">Nuevo usuario</button></a></li> --}}
    </ul>
    <table class="table table-striped">
        <thead>
              <th>ID user</th>
              <th>ID lote</th>
              <th>Horario de visita</th>

        </thead>
        <tbody>
            @foreach ($reservas as $reserva)
               <tr>
                    <td>{{($reserva->id_user == null)? "--": $reserva->user->name }}</td>
                    <td>{{($reserva->id_lote == null)? "--": $reserva->id_lote}}</td>
                    <td>{{($reserva->horario_de_visita == null)? "--": $reserva->horario_de_visita}}</td>
                   

                    {{-- <td>
                        <a href="{{route('user.permissions',$user->id)}}"><button type="button" class="btn btn-warning">Roles</button></a>
                    </td> --}}
               </tr>
            @endforeach
            <input type ='button' class="btn btn-warning"  value = 'Agregar nueva reserva' onclick="location.href = '{{ route('reserva.create') }}'"/>
        </tbody>
    </table>
    {{-- <div class="table table-striped">{{$pagos->links()}}</div> --}}
</div>
@endsection
