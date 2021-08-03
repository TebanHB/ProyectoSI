@extends('layouts.app')
<head>
	<title>Usuarios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href={{asset('homecss/css/style.css')}}>
    <!-- JavaScript Bundle with Popper -->
    <!-- CSS only -->
</head>
@section('content')
    @if ($errors->count() > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="containertable">
		<br>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><h2>Lista de Usuarios</h2></li>
        {{-- <li class="list-group-item"><a href= {{route('user.register') }} ><button type="button" class="btn btn-success btn-lg btn-block">Nuevo usuario</button></a></li> --}}
    </ul>
		<table class="newtable">
			<thead>
				  <th>Nombre</th>
				  <th>Carnet</th>
				  <th>email</th>
				  <th>Administrador</th>
				  <th>Vendedor</th>
				  <th>Cliente</th>
				  <th>Visita</th>
				<th>Opciones</th>
			</thead>
			<tbody>
				@foreach ($users as $user)
				   <tr>
						<td>{{($user->name == null)? "--": $user->name}}</td>
						<td>{{($user->carnet == null)? "--": $user->carnet}}</td>
						<td>{{($user->email == null)? "--": $user->email}}</td>
						<td>{{($user->tipo_administrador == 1)? "Si": "NO"}}</td>
						<td>{{($user->tipo_vendedor == 1)? "Si":"NO"  }}  </td>
						<td>{{($user->tipo_cliente == 1)? "Si":"NO"}}</td>
						<td>{{($user->tipo_visita == 1)? "Si":"NO"}}</td>
					   <td>
                           <a href="{{route('user.personal',$user->id)}}" class="btn btn-info btn-sm ">más informacion</a>
						<a href="{{route('user.edit',$user->id)}}" class="btn btn-info btn-sm ">editar</a>
						<a href="#" class="btn btn-info btn-sm ">borrar</a>

						<a href="{{route('telefonoPersona.telefonos',$user->id)}}" class="btn btn-info btn-sm ">ver telefono</a>
						<a href="{{route('telefonoPersona.create',$user->id)}}" class="btn btn-info btn-sm ">Agregar nuevo telefono</a>

					   </td>
				   </tr>
				@endforeach
			</tbody>
		</table>
    </div>



@endsection
