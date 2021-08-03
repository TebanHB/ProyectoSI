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
            @auth


			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
            @endauth
		</h2>
		<i class="fa fa-user" aria-hidden="true"></i>
        
	</header>


   
    

	<div class="body">
		<nav class="side-bar">
            @Auth


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
                        <a href="">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <span>Gestionar usuarios</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('user.create')}}">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <span>Agregar Nuevo Usuario</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('user.Administradores')}}">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <span>Ver admnistradores</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('user.Vendedores')}}">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <span>Ver vendedores</span>
                        </a>
                    </li>


                    <li>
                        <a href="{{route('user.Clientes')}}">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <span>Ver clientes</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('user.Visitas')}}">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <span>Ver visitas</span>
                        </a>
                    </li>
                    <hr class="sidebar-divider">
                    <li>
                        <a href="{{ route('pago.create') }}">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <span>Agregar Contrato</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('contrato.index')}}">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <span>Ver todos los contratos</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('contrato.pendiente')}}">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <span>Ver contratos pendientes</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('contrato.completado')}}">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <span>Ver contratos pagados completamente</span>
                        </a>
                    </li>

                    <hr class="sidebar-divider">

                    <li>

                        <a href="{{route('manzana.index')}}">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <span>Ver Manzanas</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('manzana.create') }}">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <span>Agregar nueva manzana</span>
                        </a>
                    </li>

                    <hr class="sidebar-divider">
                    <li>
                        <a href="{{route('vende.index')}}">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <span>Ver Ventas</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('reserva.index')}}">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <span>ver reservas</span>
                        </a>
                    </li>

                    <hr class="sidebar-divider">
                @endif
                   

                <!--    <h4>CLIENTES</h4> -->

                    @if(Auth::user()->tipo_cliente==1)
                        <li>
                            <a href="#">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <span>Ver mis contratos</span>
                            </a>
                        </li>
                        <hr class="sidebar-divider">
                        <li>
                            <a href="#">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <span>Agendar visita</span>
                            </a>
                        </li>
                        <hr class="sidebar-divider">
                        <li>
                            <a href="#">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <span>Ver mis visitas programadas</span>
                            </a>
                        </li>
                        <hr class="sidebar-divider">
                    @endif
                <!--    <h4>VENDEDOR</h4> -->


                @if(Auth::user()->tipo_vendedor==1)
                    <li>
                        <a href="{{route('reserva.index')}}">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <span>Ver visitas programadas</span>
                        </a>
                    </li>
                    <hr class="sidebar-divider">
                    <li>
                        <a href="{{route('vende.index')}}">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <span>Ver mis Ventas</span>
                        </a>
                    </li>
                    <hr class="sidebar-divider">
                    <li>
                        <a href="{{route('manzana.index')}}">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            <span>Ver manzanas</span>
                        </a>
                    </li>
                    <hr class="sidebar-divider">
                 @endif

                <!--    <h4>VISITA</h4> -->


                @if(Auth::user()->tipo_visita==1)
                        <li>
                            <a href="{{route('reserva.index')}}">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <span>Ver mis visitas programadas</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('reserva.create', Auth::user()->id)}}">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <span>Agendar Visita</span>
                            </a>
                        </li>
                        <hr class="sidebar-divider">
                @endif
        @endauth

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
    <script>  src="js/jquery.min.js"  </script>
    <script>src="js/buscador.js"</script>
</body>
</html>
