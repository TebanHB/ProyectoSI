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
        <li class="list-group-item"><h2>Cuota</h2></li>
        {{-- <li class="list-group-item"><a href= {{route('user.register') }} ><button type="button" class="btn btn-success btn-lg btn-block">Nuevo usuario</button></a></li> --}}
    </ul>
    <table class="table table-striped">
        <thead>
            <th>Amortizacion</th>
            <th>Monto_cuota</th>
            {{-- <th>user</th> --}}
      </thead>
      <tbody>
          @foreach ($cuotas as $cuota)
             <tr>
                  <td>{{($cuota->Amortizacion == null)? "--": $cuota->Amortizacion}}</td>
                  <td>{{($cuota->Monto_cuota == null)? "--": $cuota->Monto_cuota}}</td>
                  {{-- <td>{{$contrato->users->name}}</td>                 --}}
                  <td>        
               </tr> 
            @endforeach
        </tbody>
    </table>
    {{-- <div class="table table-striped">{{$pagos->links()}}</div> --}}
</div>
@endsection
