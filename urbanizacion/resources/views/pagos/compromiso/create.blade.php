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
        <h1>Nuevo Compromiso</h1>
        <div class="card-body">
            <form method="POST" action="{{ route('pago.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="usuario">
                </div>
                    </div>
                   
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
                    
                   


                </div>
                       

            <!--    <a href="{{}}" class="btn btn-success">guardar</a>  Este es boton para actualizar -->
            </form>
            <button id="botonGuardar">Guardar</button>
            <button id="botoncancelar">Cancelar</button>
        </div>
    </div>



@endsection
