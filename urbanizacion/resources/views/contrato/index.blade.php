@extends('layouts.app')
<head>
	<title>Usuarios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href={{asset('./homecss/css/style.css')}}>
    <!-- JavaScript Bundle with Popper -->
    <!-- CSS only -->
</head>
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
        <li class="list-group-item"><h2>Contratos</h2></li>
        {{-- <li class="list-group-item"><a href= {{route('user.register') }} ><button type="button" class="btn btn-success btn-lg btn-block">Nuevo usuario</button></a></li> --}}
    </ul>
    <table class="newtable">
        <thead>
            <th>Nombre</th>
            <th>Codigo de Pago</th>
            <th>Fecha de Adjudicacion</th>
            <th>monto</th>
            <th>estado</th>

            <th></th>
            {{-- <th>user</th> --}}
      </thead>
      <tbody>
          @foreach ($contratos as $contrato)
             <tr>
                <td>{{($contrato->id_user == null)? "--": $contrato->user->name}}</td>
                <td>{{($contrato->codigo_pago == null)? "--": $contrato->codigo_pago}}</td>
                <td>{{($contrato->fecha_adjudicacion == null)? "--": $contrato->fecha_adjudicacion}}</td>
                <td>{{($contrato->monto == null)? "--": $contrato->monto}}</td>
               <td>{{($contrato->estado == 1)? "completado": "pendiente"}}</td>
             
             @if($contrato->codigo_pago != null)
               @if ($contrato->pago->tipo =='credito')
               <td><a href="{{route('pago.creditopayment',$contrato->id)}}">Ver pago</a> </td>
               <td><a href="{{route('pago.imprimir',$contrato->codigo_pago)}}">Ver Kardex</a> </td>
               @endif
               @if ($contrato->pago->tipo =='compromiso')
               <td><a href="{{route('pago.compromisopayment',$contrato->id)}}">Ver pago</a> </td>
               @endif
               @if ($contrato->pago->tipo =='contado')
               <td><a href="{{route('pago.contadopayment',$contrato->id)}}">Ver pago</a> </td>
               @endif
              
              @endif 
              @if($contrato->codigo_pago == null)
              <td><a href="{{route('pago.create',$contrato->id)}}">Agregar Pago</a> </td>
              @endif 
                  {{-- <td>{{$contrato->users->name}}</td>                 --}}
                 
               </tr> 
            @endforeach
        </tbody>
    </table>
    {{-- <div class="table table-striped">{{$pagos->links()}}</div> --}}
</div>

@endsection
