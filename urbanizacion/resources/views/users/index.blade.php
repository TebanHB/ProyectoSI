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
        <li class="list-group-item"><h2>Clientes</h2></li>
        {{-- <li class="list-group-item"><a href= {{route('user.register') }} ><button type="button" class="btn btn-success btn-lg btn-block">Nuevo usuario</button></a></li> --}}
    </ul>
    <table class="table table-striped">
        <thead>
              <th>Nombresillo</th>
              <th>carnet</th>
              <th>email</th>
              <th>opciones</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
               <tr>
                    <td>{{($user->name == null)? "--": $user->name}}</td>
                    <td>{{($user->carnet == null)? "--": $user->carnet}}</td>
                    <td>{{($user->email == null)? "--": $user->email}}</td>                
                    <td>
                        {{-- <a href="{{ route('contrato.create', $user->id)}}"><button type="button" class="btn btn-success">Crear contrato</button></a> --}}
                        <a href="{{ route('contrato.create')}}"><button type="button" class="btn btn-success">Crear contrato</button></a>

                    </td>
               </tr> 
            @endforeach
        </tbody>
    </table>
    {{-- <div class="table table-striped">{{$pagos->links()}}</div> --}}
</div>
@endsection
