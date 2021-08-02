<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="homecss/css/style.css">
    <link rel="stylesheet" href={{asset('homecss/css/style.css')}}>
</head>
<body>

	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name"><a href="{{route('home')}}">
			<span>Urbanizacion</span>

		</a>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="fa fa-user" aria-hidden="true"></i>
	</header>




	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
                <h4>{{Auth::user()->rango()}}</h4>
				@can('admin')
            <!--    <h4>ADMIN</h4> -->
                @endcan
				<h4 >{{ Auth::user()->name }}</h4>
			</div>
			<ul>
                
                @if(Auth::user()->tipo_administrador==1)
				<li>
                    <a href="#">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                        <span> Ver Perfil</span>
                    </a>
                </li>

                <li>
					<a href="#">
						<i class="fa fa-eye" aria-hidden="true"></i>
						<span> Gestionar Usuarios</span>
                        <ul class="submenu">
                            <li>
                                <a href="{{ route('user.create') }}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <span>Agregar Nuevo usuario</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('user.index') }}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <span>Ver Administradores</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <span>Ver Clientes  </span>
                                </a>

                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <span>Ver Vendedores </span>

                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <span>Ver Visitas </span>
                                </a>
                            </li>

                        </ul>
					</a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-eye" aria-hidden="true"></i>
						<span> Gestionar Contrato</span>
                        <ul class="submenu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <span> Ver Contratos</span>
                                    <ul class="submenu2">
                                        <li>
                                            <a href="{{route('contrato.pendiente')}}">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                <span>Pendientes</span>
                                            </a>
                                         </li>
                                         <li>
                                            <a href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                <span>Completados</span>
                                            </a>
                                         </li>
                                    </ul>
                                   
                            <li>
                                <a href="{{ route('contrato.create') }}">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                    <span> Agregar Contrato</span>
                                </a>
                                
                            </li>
                            <li>
                                <a href="{{route('contrato.pendiente')}}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <span>Pendientes</span>
                                </a>
                            </li>
                        </ul>
                    </a>
				</li>
                @endif

                @if(Auth::user()->tipo_administrador==1)
				<li>
					<a href="{{ route('pago.create') }}">
						<i class="fa fa-eye" aria-hidden="true"></i>
						<span>Agregar nuevo pago</span>
					</a>
				</li>
                @endif
                @if(Auth::user()->tipo_administrador==1)
				<li>
					<a href="{{ route('manzana.create') }}">
						<i class="fa fa-eye" aria-hidden="true"></i>
						<span>Agregar nueva manzana</span>
					</a>
				</li>
                @endif



                @if(Auth::user()->tipo_vendedor==1)
                        <li>
                            <a href="#">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <span>Ver mis ventas</span>
                            </a>
                        </li>
                @endif
                @if(Auth::user()->tipo_cliente==1 or Auth::user()->tipo_visita==1)
                    <li>
                        <a href="#">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <span>Ver mis visitas programadas</span>
                        </a>
                    </li>
                @endif
                @if(Auth::user()->tipo_cliente==1)
                    <li>
                        <a href="#">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <span>Ver todos mis contratos</span>
                        </a>
                    </li>
                @endif
                @if(Auth::user()->tipo_cliente==1)
                    <li>
                        <a href="#">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <span>Ver kardex</span>
                        </a>
                    </li>
                @endif
                
                 @if(Auth::user()->tipo_administrador==1)
                
                    @endif
                <hr class="sidebar-divider">
                    @if(Auth::user()->tipo_administrador==1)
				<li>
					<a href="{{route('contrato.create')}}">
						<i class="fa fa-cog" aria-hidden="true"></i>
						<span>Agregar Nuevo Contrato</span>
					</a>
				</li>
                    @endif
                    @if(Auth::user()->tipo_administrador==1)
				<li>
					<a href="{{route('user.create')}}">
						<i class="fa fa-cog" aria-hidden="true"></i>
						<span>Agregar Nuevo Usuario</span>
					</a>
				</li>
                    @endif
                    @if(Auth::user()->tipo_administrador==1)
                        <li>
                            <a href="#">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <span>Agregar nueva visita</span>
                            </a>
                        </li>
                    @endif
                    @if(Auth::user()->tipo_administrador==1)
                        <li>
                            <a href="{{route('reserva.index')}}">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <span>ver reservas</span>
                            </a>
                        </li>
                    @endif

                    @if(Auth::user()->tipo_vendedor==1)
                        <li>
                            <a href="#">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <span>Ver visitas programadas</span>
                            </a>
                        </li>
                    @endif

                    @if(Auth::user()->tipo_cliente==1 or Auth::user()->tipo_visita==1)
                        <li>
                            <a href="#">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <span>Agendar nueva visita</span>
                            </a>
                        </li>
                    @endif
				<li>

					<a href="{{route('manzana.index')}}">
						<i class="fa fa-cog" aria-hidden="true"></i>
						<span>Ver Manzanas</span>
					</a>
				</li>
                    @if(Auth::user()->tipo_administrador==1 or Auth::user()->tipo_vendedor==1)
				<li>
					<a href="{{route('vende.index')}}">
						<i class="fa fa-cog" aria-hidden="true"></i>
						<span>Ver Ventas</span>
					</a>
				</li>
                    @endif
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
			@yield('content')
		</section>
	</div>

</body>
</html>
