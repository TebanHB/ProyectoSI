<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="homecss/css/style.css">
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
       <h2 class="u-name"> <a href="{{route('home')}}">Urbanizacion</a></h2>
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
						<span>Ver todos los Contratos</span>
					</a>
				</li>
                <li>
                    <a href="{{route('contrato.pendiente')}}">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                        <span>Ver Contratos pendientes</span>
                    </a>
                </li>
                <hr class="sidebar-divider">
				<li>
					<a href="{{route('contrato.create')}}">
						<i class="fa fa-cog" aria-hidden="true"></i>
						<span>Agregar Nuevo Contrato</span>
					</a>
				</li>
				<li>
					<a href="{{route('user.create')}}">
						<i class="fa fa-cog" aria-hidden="true"></i>
						<span>Agregar Nuevo Usuario</span>
					</a>
				</li>
				<li>
					<a href="{{route('cuota.create')}}">
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
<<<<<<< HEAD
			<h1>Bieafasafaf</h1>
=======
			@yield('content')
>>>>>>> d65c41d6d011977aaef9ca36267cbffeb0e15421
		</section>
	</div>

</body>
</html>
