@extends('layouts.app')
<head>
	<title>Terrenos Vendidos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href={{asset('homecss/css/style.css')}}>
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
        <li class="list-group-item"><h2>Terrenos vendidos</h2></li>
        {{-- <li class="list-group-item"><a href= {{route('user.register') }} ><button type="button" class="btn btn-success btn-lg btn-block">Nuevo usuario</button></a></li> --}}
    </ul>
    <table class="newtable">
        <thead>

              <th>Nombre</th>
              <th>ID lote</th>
              <th>Comision</th>


        </thead>
        <tbody>
            @foreach ($ventas as $vende)
               <tr>
                    <td>{{($vende->id_user == null)? "--": $vende->user->name }}</td>
                    <td>{{($vende->id_lote == null)? "--": $vende->id_lote}}</td>
                    <td>{{($vende->comision == null)? "--": $vende->comision }}</td>
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
