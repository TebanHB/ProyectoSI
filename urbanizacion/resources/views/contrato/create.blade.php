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
    <div class="containercontrato"> 
       
        <div class="card-body">
            <h1 class="Titulo_Contrato">Crear contrato</h1> 

            <form method="POST" action="{{ route('contrato.store') }}" enctype="multipart/form-data">
                @csrf
                <div id="contratoform">
                    <label for=nro_abj>Nro de Adjudicacion: </label>
                    <input type="text" id="nro_abj"> 
                    <label for="fecha">Fecha: </label>
                    <input type="date"id="fecha">
                    <br>
                    <label for="cot">Cotizacion: </label>
                    <input type="text"id="cot">
             
                </div>
                  <div id="Metodo_de_pago">
                    <h5>Forma de pago: </h5> 
                    <input type="radio" name="pago" id="compromiso1">
                    <label for = "compromiso1">compromiso</label>
                    <input type="radio" name="pago" id="contado1">
                    <label for = "contado1">contado</label>
                     <input type="radio" name="pago" id="credito1">
                     <label for = "credito1">credito</label>
                </div>
                <div id="Datos_cliente">
                    <label for=nomb>Nombre y Apellido: </label>
                    <input type="text" id="nomb"> 
                    <br>
                    <label for="carnet">Carnet: </label> 
                    <input type="text" id="carnet"> 
                    <label for="tel">Telefono: </label> 
                    <input type="text" id="tel"> 
                </div>

                <div id="Datos_terreno">
                    <label for=nro_terreno>Nro del Terreno : </label>
                    <input type="text" id="nro_terreno">
                    <br>
                    <label for="manzana">Manzana: </label> 
                    <input type="text" id="manzana">  
                    <label for="precio">Precio: </label>
                    <input type="text" id="precio"> 
                    <label for=Superficie>Superficie : </label>
                    <input type="text" id="Superficie"> 

                </div>

                

                <div id="Datos_pago">
                    <div id="pago_credito">
                        <h5>Credito</h5>
                        <label for=cuota_inicial>Cuota Inicial: </label>
                        <input type="text" id="cuota_inicial"> 
                        <br>                        <br>


                        <label for=Plazo>Plazo: </label>
                        <input type="text" id="Plazo"> 
                        <br>                        <br>


                        <label for=Interes_anual>Interes Anual : </label>
                        <input type="text" id="Interes_anual"> 
                        <br>                        <br>
                        <label for=cuota_mensual>Cuota Mensual: </label>
                        <input type="text" id="cuota_mensual"> 
                        <br>                        <br>


                        <label for=Fecha_programada>Fecha Programada: </label>
                        <input type="text" id="Fecha_programada"> 
                        <br>        <br>


                        <label for=Fecha_inicio>Fecha Inicio: </label>
                        <input type="date" id="cuota_inicial"> 
                        <br>                        <br>
                    

                        <label for=Fecha_ult>Fecha Ultima Cuota: </label>
                        <input type="date" id="Fecha_ult">
                        <br>                        <br>


                        <label for=saldo_fin>Saldo Financiado: </label>
                        <input type="date" id="saldo_fin">
                    </div>   
                    <div id="compromiso">
                        <h5>Compromiso</h5>

                        <label for=monto_pag>Monto Pagado: </label>
                        <input type="text" id="monto_pag"> 
                        <br>                        <br>

                        <label for=monto_pagar>Monto a Pagar: </label>
                        <input type="text" id="monto_pagar">
                        <br>                        <br>

                        <label for=Fecha_gar>Fecha Pago Garantia: </label>
                        <input type="date" id="Fecha_gar">
                        <br>                        <br>

                        <label for=Fecha_apag>Fecha a Pagar: </label>
                        <input type="date" id="Fecha_apag">
                    </div>

                    <div id="contadocontrato">
                        <h5>Contado</h5>
                        <label for=monto>Monto: </label>
                        <input type="text" id="monto"> 
                        <br>                        <br>

                        <label for=descuento>Descuento: </label>
                        <input type="text" id="descuento"> 
                        <br>                        <br>

                        <label for=fecha>Fecha de Pago: </label>
                        <input type="date" id="fecha"> 

                    </div>
                </div>  
                <div class="botonescontrato">
                    <button id="botonGuardar">Guardar Contrato</button>
                    <button id="botoncancelar">Cancelar</button>
                </div>
            </form>
            
        </div>
        
        
    
    </div>  
   
    

@endsection