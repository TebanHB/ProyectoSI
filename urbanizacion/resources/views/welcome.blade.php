<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                    <img src="img/LOGOCHIQUIURBAN.png" width="150" >
                </a>
                <nav>
                  
                    <a href="#inicio"> Inicio </a>
                    <a href="#nosotros"> Nosotros </a>
                    <a href="#servicios"> Servicios </a>
                    <a href="#galeria"> Galeria </a>
                    <a href="#contactanos"> Contactanos </a> 
                    
                    @if (Route::has('login'))
               
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Inicio de Sesion</a>
    
                         @if (Route::has('register'))
                                <a href="{{ route('register')}}" class="ml-4 text-sm text-gray-700 underline">Agendar Reserva</a>
                            @endif
                        @endauth
                    </div>
                @endif
                </nav>
        </header>
        <main>
           
                <section id="inicio">
                    <img src="img/terreno6.png">
                    <div class="bloque-inicio">
                        <h1>Bienvenidos a Urbanizacion ChiquiUrban</h1>
                        <a href="#nosotros" class="boton boton-verde">Ver mas</a>
                    </div>
                </section>

                <section id="nosotros" class="seccion">
                    <div class="container">
                        <p> Una Urbanizacion que se encarga de
                         vender terrenos pequeños, 
                         medianos y grandes</p>
                    </div>
                </section>
                <section id="servicios" class="seccion">
                    <div class="container">
                        <div class="row">

                            <div class="columna columna-33">
                                <div class="bloque-servicio">
                                    <div class="bloque-img-servicio cuadrado-perfecto">
                                        <img src="img/terreno8.jpg" >
                                    </div>
                                    <div class="bloque-contenido-servicio">
                                        <h3>Servicio 1</h3>
                                        <p>Venta de terrenos</p>
                                        <a href="{{ route('terreno.index') }}" class="boton boton-blanco">Ver mas</a>
                                    </div>
                                </div>
                            </div>

                            <div class="columna columna-33">
                                <div class="bloque-servicio">
                                    <div class="bloque-img-servicio cuadrado-perfecto">
                                        <img src="img/terreno2.jpg" >
                                    </div>
                                    <div class="bloque-contenido-servicio">
                                        <h3>Servicio 2</h3>
                                        <p>Ubicacion</p>
                                        <a href="#" class="boton boton-blanco">Ver mas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
               
                <section id="galeria">
                    <a href="#image1"> 
                        <img src="img/terreno.jpg" alt="">
                    </a>
                    <a href="#image2"> 
                        <img src="img/urbanizacion.jpg" alt="">
                    </a>
                    <a href="#image3"> 
                        <img src="img/terreno2.jpg" alt="">
                    </a>
                    <a href="#image4"> 
                        <img src="img/terreno3.jpg" alt="">
                    </a>
                    <a href="#image5"> 
                        <img src="img/terreno8.jpg" alt="">
                    </a>
                    <a href="#image6"> 
                        <img src="img/terreno6.png" alt="">
                    </a>
                </section>
                <article class="light-box" id="image1">
                    <a href="#image6" class="next"> <i class="fas fa-arrow-left"></i> </a>
                        <img src="img/terreno.jpg" alt="">
                    <a href="#image2" class="next"> <i class="fas fa-arrow-right"></i></a>
                    <a href="#" class="close">X</a>
                </article>

                <article class="light-box" id="image2">
                    <a href="#image1" class="next"> <i class="fas fa-arrow-left"></i> </a>
                        <img src="img/urbanizacion.jpg" alt="">
                    <a href="#image3" class="next"> <i class="fas fa-arrow-right"></i></a>
                    <a href="#" class="close">X</a>
                </article>

                <article class="light-box" id="image3">
                    <a href="#image2" class="next"> <i class="fas fa-arrow-left"></i> </a>
                        <img src="img/terreno2.jpg" alt="">
                    <a href="#image4" class="next"> <i class="fas fa-arrow-right"></i></a>
                    <a href="#" class="close">X</a>
                </article>

                <article class="light-box" id="image4">
                    <a href="#image3" class="next"> <i class="fas fa-arrow-left"></i> </a>
                        <img src="img/terreno3.jpg" alt="">
                    <a href="#image5" class="next"> <i class="fas fa-arrow-right"></i></a>
                    <a href="#" class="close">X</a>
                </article>
                <article class="light-box" id="image5">
                    <a href="#image4" class="next"> <i class="fas fa-arrow-left"></i> </a>
                        <img src="img/terreno8.jpg" alt="">
                    <a href="#image6" class="next"> <i class="fas fa-arrow-right"></i></a>
                    <a href="#" class="close">X</a>
                </article>
                <article class="light-box" id="image6">
                    <a href="#image5" class="next"> <i class="fas fa-arrow-left"></i> </a>
                        <img src="img/terreno6.png" alt="">
                    <a href="#image1" class="next"> <i class="fas fa-arrow-right"></i></a>
                    <a href="#galeria" class="close">X</a>
                </article>



                <section id="contactanos" class="seccion">
                    <iframe width="520" height="388" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=388&amp;hl=en&amp;q=%20santa%20cruz%20+(urbanizacion)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>                    <div class="container">
                        <div class="container-fluid">
                        <div class="row">
                            <div class="columna columna-33 empujar-66">
                                <form action="" method="POST">
                                    <div class="form-block">
                                        <label for = "nombre">Nombre: </label>
                                        <input type="text" name="nombre"  placeholder=Nombre class="form-control">
                                    </div>
                                    <div class="form-block">
                                        <label for = "email">email: </label>
                                        <input type="text" name="email"  placeholder=Email class="form-control">
                                    </div>
                                    <div class="form-block">
                                        <label for = "mensaje">mensaje: </label>
                                        <input type="text" name="mensaje"  placeholder=Mensaje class="form-control">
                                    </div>

                                    <div class="form-block bloque-ultimo">
                                        <input type="submit" class="boton boton-negro" value="Enviar">
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                   
                </section>
         </main>
         <footer >
             <div class="container">
                <div class="row">
                    <div class="columna columna-25">
                        <img src="img/logo2.png" class="logo-footer">
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
                        <ul class="redes"> 
                            <li>
                                <a href="https://www.facebook.com/">    
                                    <i class="fab fa-facebook-f"></i>   
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/">   
                                    <i class="fab fa-twitter"></i>   
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/">   
                                    <i class="fab fa-instagram"></i> 
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>
             </div>
             <div class="barra-footer">
                &copy; Proyecto sistemas de informacion - 2021
             </div>
         </footer>

            </div>
        </header>
        
        
       
        <!-- JS Main -->
        <script src="js/main.js"></script>
      
    </body>
     
    </body>
</html>
