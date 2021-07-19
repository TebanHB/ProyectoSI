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
        <li class="list-group-item"><h2>Tipos de pago</h2></li>
        {{-- <li class="list-group-item"><a href= {{route('user.register') }} ><button type="button" class="btn btn-success btn-lg btn-block">Nuevo usuario</button></a></li> --}}
    </ul>
    <table class="table table-striped">
        <thead>
              <th>Tipo</th>
              <th>Cuota inicial</th>
              <th>Plazo</th>
              <th>Interes anual</th>
              <th>Cuota Mensual</th>
              <th>Fecha Programada</th>
              <th>Fecha de inicio</th>
              <th>Fecha de la ultima cuota</th>
              <th>Estado</th>
              <th>Saldo Financiado</th>
        </thead>
        <tbody>
            @foreach ($pagos as $pago)
               <tr>
                    <td>{{($pago->tipo == null)? "--": $pago->tipo}}</td>
                    <td>{{($pago->cuota_inicial == null)? "--": $pago->cuota_inicial}}</td>
                    <td>{{($pago->plazo == null)? "--": $pago->plazo}}</td>
                    <td>{{($pago->interes_anual == null)? "--": $pago->interes_anual}}</td>
                    <td>{{($pago->cuota_mensual == null)? "--": $pago->cuota_mensual}}</td>
                    <td>{{($pago->fecha_prog == null)? "--": $pago->fecha_prog}}</td>
                    <td>{{($pago->fecha_inicio == null)? "--": $pago->fecha_inicio}}</td>
                    <td>{{($pago->fecha_ultima_cuota == null)? "--": $pago->fecha_ultima_cuota}}</td>
                    <td>{{($pago->estado == null)? "--": $pago->estado}}</td>
                    <td>{{($pago->saldo_financiado == null)? "--": $pago->saldo_financiado}}</td>
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
