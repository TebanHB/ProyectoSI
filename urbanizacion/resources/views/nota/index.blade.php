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
        <li class="list-group-item"><h2>Nota</h2></li>
        {{-- <li class="list-group-item"><a href= {{route('user.register') }} ><button type="button" class="btn btn-success btn-lg btn-block">Nuevo usuario</button></a></li> --}}
    </ul>
    <table class="table table-striped">
        <thead>
              <th>Descripcion</th>
              <th>Fecha</th>
              <th>ID bitacora</th>
        </thead>
        <tbody>
            @foreach ($notas as $nota)
               <tr>
                    <td>{{($nota->descripcion == null)? "--": $nota->Fecha }}</td>
                    <td>{{($nota->Fecha == null)? "--": $nota->Fecha}}</td>
                    <td>{{($nota->id_bitacora == null)? "--": $nota->id_bitacora}}</td>

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
