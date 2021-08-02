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
        <h1>Nuevo Contado</h1>
        <div class="card-body">
            <form method="POST" action="{{ route('pago.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="usuario">
                </div>
                    </div>
                    <input type="hidden" name="formadepago_id" value="contado">
                    <label for="monto">Monto: </label>
                    <input type="number" name = 'monto' id="monto">
                   
                    <br> <br>
                    <label for="descuento">Descuento: </label>
                    <input type="number"name = "descuento" id="descuento">
           
                
                    <br> <br>
                    <label for="fecha_de_pago">Fecha de pago: </label>
                    <input type="date"name = "fecha_de_pago" id="fecha_de_pago">
                    <br> <br>


                </div>
                <button type="submit" class="botonescontrato ">
                    {{ __('Guardar') }}
               </button>

            </form>

            <button id="botoncancelar">Cancelar</button>
        </div>
    </div>



@endsection
