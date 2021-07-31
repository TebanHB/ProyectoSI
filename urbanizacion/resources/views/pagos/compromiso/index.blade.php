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
        <li class="list-group-item"><h2>Compromiso</h2></li>
        {{-- <li class="list-group-item"><a href= {{route('user.register') }} ><button type="button" class="btn btn-success btn-lg btn-block">Nuevo usuario</button></a></li> --}}
    </ul>
    <table class="newtable">
        <thead>
              <th>Tipo</th>
              <th>monto_pagado</th>
              <th>monto_a_pagar</th>
              <th>fecha_pago_garantia</th>
              <th>fecha_a_pagar</th>
        

        </thead>
        <tbody>
            @foreach ($pagos as $pago)
               <tr>
                     @if($pago->tipo == "compromiso")
                    <td>{{($pago->tipo == null)? "--": $pago->tipo}}</td>
                    <td>{{($pago->monto_pagado == null)? "--": $pago->monto_pagado}}</td>
                    <td>{{($pago->monto_a_pagar == null)? "--": $pago->monto_a_pagar}}</td>
                    <td>{{($pago->fecha_pago_garantia == null)? "--": $pago->fecha_pago_garantia}}</td>
                    <td>{{($pago->fecha_a_pagar == null)? "--": $pago->fecha_a_pagar}}</td>
                   
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
