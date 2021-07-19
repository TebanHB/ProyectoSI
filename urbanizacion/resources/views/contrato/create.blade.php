@extends('home')
@section('datos')
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
        <h1>Crear contrato</h1>
        <div class="card-body">
            <form method="POST" action="{{ route('contrato.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="contrato">
                    <label for=nro_abj>Nro de Adjudicacion: </label>
                    <input type="text" id="nro_abj">
                    <label for="fecha">Fecha: </label>
                    <input type="date"id="fecha">
                    <label for="cot">Cotizacion: </label>
                    <input type="text"id="cot">
                  </div>
                  <br> <br>

                <div class="Datos_cliente">
                    <label for=nomb>Nombre y Apellido: </label>
                    <input type="text" id="nomb">
                    <label for="carnet">Carnet: </label>
                    <input type="text" id="carnet">
                    <label for="tel">Telefono: </label>
                    <input type="text" id="tel">
                </div>
            <br> <br>

                <div class="Datos_terreno">
                    <label for=nro_terreno>Nro del Terreno : </label>
                    <input type="text" id="nro_terreno">
                    <label for="manzana">Manzana: </label>
                    <input type="text" id="manzana">  </br>
                    <label for="precio">Precio: </label>
                    <input type="text" id="precio">
                    <label for=Superficie>Superficie : </label>
                    <input type="text" id="Superficie">

                </div>
                <br> <br>

                <div class="Metodo de pago">

                    <br>Forma de pago: </br>
                    <input type="radio" name="" id="">compromiso
                    <input type="radio" name="" id="">contado
                     <input type="radio" name="" id="">credito
                </div>
                <br> <br>

                <div class="Datos_pago">
                    <div class="pago_credito">
                        <h5>Credito</h5>
                        <label for=cuota_inicial>Cuota Inicial: </label>
                        <input type="text" id="cuota_inicial">
                        <label for=Plazo>Plazo: </label>
                        <input type="text" id="Plazo">
                        <label for=Interes_anual>Interes Anual : </label>
                        <input type="text" id="Interes_anual">
                        <br>
                        <label for=cuota_mensual>Cuota Mensual: </label>
                        <input type="text" id="cuota_mensual">
                        <label for=Fecha_programada>Fecha Programada: </label>
                        <input type="text" id="Fecha_programada">
                        <label for=Fecha_inicio>Fecha Inicio: </label>
                        <input type="date" id="cuota_inicial">
                        <br>

                        <label for=Fecha_ult>Fecha Ultima Cuota: </label>
                        <input type="date" id="Fecha_ult">
                        <label for=saldo_fin>Saldo Financiado: </label>
                        <input type="date" id="saldo_fin">
                    </div>
                    <br> <br>
                    <div class="compromiso">
                        <h5>Compromiso</h5>

                        <label for=monto_pag>Monto Pagado: </label>
                        <input type="text" id="monto_pag">
                        <label for=monto_pagar>Monto a Pagar: </label>
                        <input type="text" id="monto_pagar">
                        <br>
                        <label for=Fecha_gar>Fecha Pago Garantia: </label>
                        <input type="date" id="Fecha_gar">
                        <label for=Fecha_apag>Fecha a Pagar: </label>
                        <input type="date" id="Fecha_apag">
                    </div>
                    <br> <br>

                    <div clas="contado">
                        <h5>Contado</h5>
                        <label for=monto>Monto: </label>
                        <input type="text" id="monto">
                        <label for=descuento>Descuento: </label>
                        <input type="text" id="descuento">
                        <label for=fecha>Fecha de Pago: </label>
                        <input type="date" id="fecha">

                    </div>
                </div>
            </form>
        </div>
    </div>

    <button class="botonGuardar">Guardar Contrato</button>
    <button class="botoncancelar">Cancelar</button>

@endsection
