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
                    <input type="hidden" name="formadepago_id" value="compromiso">
                    <label for="monto_pagado">Monto Pagado: </label>
                    <input type="number" name = "monto_pagado" id="monto_pagado">
                    <br> <br>
                    <label for="monto_a_pagar">Monto a Pagar: </label>
                    <input type="number"name = "monto_a_pagar" id="monto_a_pagar">
                    
                    <br> <br>
                    <label for="fecha_pago_garantia">Fecha Pago Garantia: </label>
                    <input type="date" name = "fecha_pago_garantia" id="fecha_pago_garantia">
                    <br> <br>
                    <label for="fecha_a_pagar">Fecha a Pagar: </label>
                    <input type="date" name = "fecha_a_pagar" id="fecha_a_pagar">
                    
                   


                </div>
                <button type="submit" class="botonescontrato ">
                    {{ __('Guardar') }}
               </button>   

            </form>
            <button id="botonGuardar">Guardar</button>
            <button id="botoncancelar">Cancelar</button>
        </div>
    </div>



@endsection
