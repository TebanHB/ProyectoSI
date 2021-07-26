@extends('layouts.app')
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
        <h1>Crear nuevo usuario</h1>
        <div class="card-body">
            <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="usuario">
                </div>
                    </div>
                    <div id="Metodo_de_pago">
                    <h5>Forma de pago: </h5> 
                    <input type="radio" name="pago" id="compromiso2">
                    <label for = "compromiso1">Compromiso</label>
                    <input type="radio" name="pago" id="contado2">
                    <label for = "contado1">Contado</label>
                    <input type="radio" name="pago" id="credito2">
                    <label for = "credito1">Credito</label>
                </div>
                    
                    <label for="cuota_inicial">Cuota Inicial: </label>
                    <input type="number"id="cuota_inicial">
                    <br> <br>
                    <label for="plazo">Plazo: </label>
                    <input type="text"id="plazo">
                    <br> <br>
                    <label for="interes_anual">Interes Anual: </label>
                    <input type="text"id="interes_anual">
                    <br> <br>
                    <label for="cuota_mensual">Cuota Mensual: </label>
                    <input type="number"id="cuota_mensual">
                    <br> <br>
                    <label for="fecha_Prog">Fecha Programada: </label>
                    <input type="date"id="fecha_Prog">
                    <br> <br>
                    <label for="fecha_inicio">Fecha Inicio: </label>
                    <input type="date"id="fecha_inicio">
                    <br> <br>
                    <label for="fecha_ultima_cuota">Fecha ultima cuota: </label>
                    <input type="date"id="fecha_ultima_cuota">
                    <br> <br>
                    
                    <h5>Estado: </h5> 
                    <input type="radio" name="estado" id="activo">
                    <label for = "activo">Activo</label>
                    <input type="radio" name="estado" id="finalizado">
                    <label for = "finalizado">Finalizado</label>

                    <br> <br>
                    <label for="saldo_financiado">Saldo Financiado: </label>
                    <input type="number"id="saldo_financiado">
                    <br> <br>
                    
                    <label for="monto_pagado">Monto Pagado: </label>
                    <input type="number"id="monto_pagado">
                    <br> <br>
                    <label for="monto_a_pagar">Monto a Pagar: </label>
                    <input type="number"id="monto_a_pagar">
                    
                    <br> <br>
                    <label for="fecha_pago_garantia">Monto Pagado: </label>
                    <input type="date"id="fecha_pago_garantia">
                    <br> <br>
                    <label for="fecha_a_pagar">Saldo Financiado: </label>
                    <input type="date"id="fecha_a_pagar">
                    
                    <br> <br>
                    <label for="monto">Monto: </label>
                    <input type="number"id="monto">
                   
                    <br> <br>
                    <label for="descuento">Descuento: </label>
                    <input type="number"id="descuento">
                    
                    <br> <br>
                    <label for="descuento">Descuento: </label>
                    <input type="number"id="descuento">
                    <br> <br>
                    

                    <br> <br>
                    <label for="interes_anual">Interes Anual: </label>
                    <input type="text"id="interes_anual">
                    <br> <br>
                    <br> <br>
                    <label for="fecha_de_pago">Fecha de pago: </label>
                    <input type="date"id="fecha_de_pago">
                    <br> <br>


                </div>
                       

            <!--    <a href="{{}}" class="btn btn-success">guardar</a>  Este es boton para actualizar -->
            </form>
        </div>
    </div>



@endsection
