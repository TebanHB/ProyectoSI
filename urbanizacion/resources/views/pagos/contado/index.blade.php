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
        <li class="list-group-item"><h2>Contado</h2></li>
        {{-- <li class="list-group-item"><a href= {{route('user.register') }} ><button type="button" class="btn btn-success btn-lg btn-block">Nuevo usuario</button></a></li> --}}
    </ul>
    <table class="newtable">
        <thead>
              <th>Tipo</th>
              <th>monto</th>
              <th>descuento</th>
              <th>fecha_de_pago</th>

        </thead>
        <tbody>
            @foreach ($pagos as $pago)
               <tr>
                   @if($pago->tipo == "contado")
                    <td>{{($pago->tipo == null)? "--": $pago->tipo}}</td>
                    <td>{{($pago->monto == null)? "--": $pago->monto}}</td>
                    <td>{{($pago->descuento == null)? "--": $pago->descuento}}</td>
                    <td>{{($pago->fecha_de_pago == null)? "--": $pago->fecha_de_pago}}</td>
                    {{-- <td>
                        <a href="{{route('user.permissions',$user->id)}}"><button type="button" class="btn btn-warning">Roles</button></a>
                    </td> --}}
                   @endif
               </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <div class="table table-striped">{{$pagos->links()}}</div> --}}
</div>
@endsection
