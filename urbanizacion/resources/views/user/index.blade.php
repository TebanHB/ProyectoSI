<!DOCTYPE html>
@extends('layouts.app')

<html>
<head>
	<title>Usuarios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href={{asset('homecss/css/style.css')}}>
    <!-- JavaScript Bundle with Popper -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <div class="container"> 
		<table class="table table-dark table-hover">
			<thead>
				  <th>Nombre</th>
				  <th>Carnet</th>
				  <th>email</th>
				  <th>Administrador</th>
				  <th>Vendedor</th>
				  <th>Cliente</th>
				  <th>Visita</th>

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
							{{-- <a href="{{ route('contrato.create', $user->id)}}"><button type="button" class="btn btn-success">Crear contrato</button></a> --}}
						   
	
						</td>
				   </tr> 
				@endforeach
			</tbody>
		</table>
    </div>  
   


@endsection

</html>