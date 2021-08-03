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
        <h1>Nuevo Credito</h1>
        <div class="card-body">
            <form method="POST" action="{{ route('pago.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="usuario">
                </div>
                    </div>
                    <input type="hidden" name="formadepago_id" value="credito">
                    <label for="cuota_inicial">Cuota Inicial: </label>
                    <input type="number"name="cuota_inicial"id="cuota_inicial">
                    <br> <br>
                    <label for="plazo">Plazo: </label>
                    <input type="text"name="plazo"id="plazo">
                    <br> <br>
                    <label for="interes_anual">Interes Anual: </label>
                    <input type="text"name = "interes_anual" id="interes_anual">
                    <br> <br>
                    <label for="cuota_mensual">Cuota Mensual: </label>
                    <input type="number" name = "cuota_mensual" id="cuota_mensual">
                    <br> <br>
                    <label for="fecha_Prog">Fecha Programada: </label>
                    <input type="text" name= "fecha_Prog" id="fecha_Prog">
                    <br> <br>
                    <label for="fecha_inicio">Fecha Inicio: </label>
                    <input type="date" name = "fecha_inicio" id="fecha_inicio">
                    <br> <br>
                    <label for="fecha_ultima_cuota">Fecha ultima cuota: </label>
                    <input type="date" name= "fecha_ultima_cuota" id="fecha_ultima_cuota">
                    <br> <br>
                    
                    <h5>Estado: </h5> 
                    <input type="radio" name="estado" id="activo" value = "Activo">
                    <label for = "activo">Activo</label>
                    <input type="radio" name="estado" id="finalizado" value = "Finalizado">
                    <label for = "finalizado">Finalizado</label>

                    <br> <br>
                    <label for="saldo_financiado">Saldo Financiado: </label>
                    <input type="number" name= "saldo_financiado" id="saldo_financiado">
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
