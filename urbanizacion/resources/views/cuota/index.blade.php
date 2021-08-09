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
        <li class="list-group-item"><h2>Cuota</h2></li>
        {{-- <li class="list-group-item"><a href= {{route('user.register') }} ><button type="button" class="btn btn-success btn-lg btn-block">Nuevo usuario</button></a></li> --}}
    </ul>
    <table class="newtable">
        <thead>
            <th>ID credito</th>
            <th>ID mora</th>
            <th>Amortizacion</th>
            <th>Monto_cuota</th>
            <th></th>
            {{-- <th>user</th> --}}
      </thead>
      <tbody>
          @foreach ($cuotas as $cuota)
             <tr>
                  <td>{{($cuota->id_credito == null)? "--": $cuota->id_credito}}</td>
                  <td>{{($cuota->id_mora == null)? "--": $cuota->id_mora}}</td>
                  <td>{{($cuota->amortizacion == null)? "--": $cuota->amortizacion}}</td>
                  <td>{{($cuota->monto_cuota == null)? "--": $cuota->monto_cuota}}</td>
                  {{-- <td>{{$contrato->users->name}}</td>                 --}}
                  @if($cuota->id_mora != null)
                  <td><a href="{{route('cuota.moras', $cuota->id ,$cuota->id_mora)}}">Ver Mora</a></td>
                  @endif
                  @if($cuota->id_mora == null)
                  <td>   <a href="{{route('mora.create', $cuota->id)}}">Agregar Mora</a></td>
                   @endif      
                </tr>
                <input type ='button' class="btn btn-warning"  value = 'Agregar cuota' onclick="location.href = '{{ route('cuota.create',$cuota->id_credito)}}'"/>
            @endforeach
        </tbody>
    </table>
    {{-- <div class="table table-striped">{{$pagos->links()}}</div> --}}
</div>
@endsection
