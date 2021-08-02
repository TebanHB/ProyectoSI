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
        <li class="list-group-item"><h2>Terrenos</h2></li>
        {{-- <li class="list-group-item"><a href= {{route('user.register') }} ><button type="button" class="btn btn-success btn-lg btn-block">Nuevo usuario</button></a></li> --}}
    </ul>
    <table class="table table-striped">
        <thead>
              <th>ID contrato</th>
              <th>ID manzana</th>
              <th>ID users</th>
              <th>Superficie del terreno</th>
              <th>Precio</th>
              <th>Estado del terreno</th>
            
        </thead>
        <tbody>
            @foreach ($terrenos as $terreno)
               <tr>
                    <td>{{($terreno->id_contrato == null)? "--": $terreno->id_contrato }}</td>
                    <td>{{($terreno->id_manzana == null)? "--": $terreno->id_manzana}}</td>
                    <td>{{($terreno->id_users == null)? "--": $terreno->id_users }}</td>
                    <td>{{($terreno->superficie_terreno == null)? "--": $terreno->superficie_terreno}}</td>
                    <td>{{($terreno->precio == null)? "--": $terreno->precio }}</td>
                    <td>{{($terreno->estado_terreno == null)? "--": $terreno->estado_terreno}}</td>

                    @if($terreno->estado_terreno == 'libre')
                    <td><a href="{{route('terreno.edit',$terreno->id)}}">Comprar Terreno</a> </td>
                    @endif
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