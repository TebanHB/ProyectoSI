<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href={{asset('./homecss/css/style.css')}}>
    <!-- JavaScript Bundle with Popper -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">Urbanizacion
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="fa fa-user" aria-hidden="true"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				@can('admin')
                <h4>ADMIN</h4>
                @endcan
				<h4 >{{ Auth::user()->name }}</h4>
			</div>
			<ul>
				<li>
					<a href="{{ route('user.index') }}">
						<i class="fa fa-eye" aria-hidden="true"></i>
						<span>Ver Usuarios</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-eye" aria-hidden="true"></i>
						<span>Ver Contratos</span>
					</a>
				</li>
                <hr class="sidebar-divider">
				<li>
					<a href="#">
						<i class="fa fa-cog" aria-hidden="true"></i>
						<span>Agregar Nuevo Contrato</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-cog" aria-hidden="true"></i>
						<span>Agregar Nuevo Usuario</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-cog" aria-hidden="true"></i>
						<span>Agregar Nueva Cuota</span>
					</a>
				</li>
				<li>
					<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Cerrar Sesión</span>
					</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
				</li>
			</ul>
		</nav>
		<section class="section-1">
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
        
		</section>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>