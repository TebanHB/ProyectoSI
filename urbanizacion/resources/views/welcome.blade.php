<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Urbanizacion ChiquiUrban</title>
        <link rel="shortcut icon" href="img/LOGOCHIQUIURBAN.png">
        <!-- Fonts -->
        
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <style>
           
        </style>
            <link rel="stylesheet" href="css/normalize.css"> 
            <link rel="stylesheet" href="homecss/css/welcome.css">
            <script src="https://kit.fontawesome.com/93086c386c.js" crossorigin="anonymous"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color red;
            }
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Caompatible" content="ie=edge">
        <title>Materilize | Carrousel y Media</title>
       
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
        
        
        
        <!-- CSS Estilos -->
       
    </head>
    <body class="antialiased" >
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
            
         
    </body >
    <head>
        
    </head>
    <body>
        <header>
            <div class="container">
                <a href="wecolme.blade.php">
                    <img src="img/LOGOCHIQUIURBAN.png" width="150">
                </a>
                <nav>
                   
                    <a href="#inicio"> Inicio </a>
                    <a href="#nosotros"> Nosotros </a>
                    <a href="#servicios"> Servicios </a>
                    <a href="#galeria"> Galeria </a>
                    <a href="#contactanos"> Contactanos </a> <br>
                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Inicio de Sesion</a><br>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Registrarse</a><br>
                            @endif
                        @endauth
                    </div>
                @endif
                </nav>
        </header>
        <main>
                <section id="inicio">
                    <img src="img/manzanas.jpg">
                    <div class="bloque-inicio">
                        <h1>Bienvenidos a Urbanizacion ChiquiUrban</h1>
                        <a href="#nosotros" class="boton boton-verde">Ver mas</a>
                    </div>
                </section>

                <section id="nosotros">
                    <div class="container">
                        Una Urbanizacion que se encarga de vender terrenos pequeños, medianos y grandes
                    </div>
                </section>
                <section id="servicios">
                    <div class="container">
                        <div class="row">

                            <div class="columna columna-33">
                                <div class="bloque-servicio">
                                    <div class="bloque-img-servicio">
                                        <img src="img/terreno.jpg" >
                                    </div>
                                    <div class="bloque-contenido-servicio">
                                        <h3>Servicio 1</h3>
                                        <p>Venta de terrenos</p>
                                        <a href="{{ route('terreno.index') }}" class="boton">Ver mas</a>
                                    </div>
                                </div>
                            </div>

                            <div class="columna columna-33">
                                <div class="bloque-servicio">
                                    <div class="bloque-img-servicio">
                                        <img src="img/ubicacion.jpg" >
                                    </div>
                                    <div class="bloque-contenido-servicio">
                                        <h3>Servicio 2</h3>
                                        <p>Ubicacion</p>
                                        <a href="#" class="boton">Ver mas</a>
                                    </div>
                                </div>
                            </div>

                            

                        </div>
                    </div>
                </section>

                <section id="galeria">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="columna columna-33">
                                <div class="cuadrado-perfecto">
                                    <img src="img/terreno.jpg">
                                    <h4>Imagen1</h4>
                                </div>
                            </div>

                            <div class="columna columna-33">
                                <div class="cuadrado-perfecto">
                                    <img src="img/urbanizacion.jpg">
                                    <h4>Imagen2</h4>
                                </div>
                            </div>

                           

                        </div>
                    </div>
                </section>

                <section id="contactanos">
                    <div class="container">
                        <div class="row">
                            <div class="columna columna-50">
                                <form action="" method="POST">

                                    <div class="form-block">
                                        <label for = "name">Nombre: </label>
                                        <input type="text" name="nombre" class="form-control">
                                    </div>

                                    <div class="form-block">
                                        <label for = "email">Email: </label>
                                        <input type="email" name="email" class="form-control">
                                    </div>

                                    <div class="form-block">
                                        <label for = "mensaje">Mensaje: </label>
                                        <textarea name="mensaje"></textarea>
                                    </div>
                                    <div class="form-block">
                                        <input type="submit" value="Enviar">
                                    </div>
                                    
                                </form>
                            </div>

                        </div>
                    </div>
                    <iframe width="520" height="400" frameborder="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20La%20Paz+(santa%20cruz%20de%20la%20sierra)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> 
                </section>
         </main>
         <footer>
             <div class="container">
                <div class="row">
                    <div class="columna columna-25">
                        <img src="img/LOGOCHIQUIURBAN.jpg" class="logo-footer">
                        
                    </div>

                    <div class="columna columna-25">
                        <h3>
                           Temas relacionados
                        </h3>
                        <ul> 
                            <li><a href="#">Tema 1</a></li>
                            <li><a href="#">Tema 2</a></li>
                        </ul>
                    </div>

                    <div class="columna columna-25">
                        <h3>
                            Datos de contacto
                        </h3>
                        <ul> 
                            <li>camilareyes562@gmail.com</li>
                            <li>+59171010463</li>
                            <li>Radial 27 <br>Santa Cruz de la Sierra -Bolivia </li>
                        </ul>

                    </div>

                    <div class="columna columna-25">
                        <h3>
                            Redes Sociales
                        </h3>
                        <ul> 
                            <li>
                                <a href="#">    
                                    <i>
                                    </i>     
                                </a>
                            </li>
                            <li>
                                <a href="#">    
                                    <i>
                                    </i>     
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>
             </div>
             <div class="barra-footer">
                &copy; Derechos Reservados - 2020
             </div>
         </footer>

            </div>
        </header>
        
        
       
        <!-- JS Main -->
        <script src="js/main.js"></script>
    </body>
    
    </body>
</html>
