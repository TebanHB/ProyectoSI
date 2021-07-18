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
        <li class="list-group-item"><h2>Contratos</h2></li>
        {{-- <li class="list-group-item"><a href= {{route('user.register') }} ><button type="button" class="btn btn-success btn-lg btn-block">Nuevo usuario</button></a></li> --}}
    </ul>
    <table class="table table-striped">
        <thead>
            <th>fecha_adjudicacion</th>
            <th>monto</th>
            {{-- <th>user</th> --}}
      </thead>
      <tbody>
          @foreach ($contratos as $contrato)
             <tr>
                  <td>{{($contrato->fecha_adjudicacion == null)? "--": $contrato->fecha_adjudicacion}}</td>
                  <td>{{($contrato->monto == null)? "--": $contrato->monto}}</td>
                  {{-- <td>{{$contrato->users->name}}</td>                 --}}
                  <td>        
                    {{-- <td>
                        <a href="{{ route('contrato.create', $user->id)}}"><button type="button" class="btn btn-success">Crear contrato</button></a>
                    </td> --}}
               </tr> 
            @endforeach
        </tbody>
    </table>
    {{-- <div class="table table-striped">{{$pagos->links()}}</div> --}}
</div>
@endsection