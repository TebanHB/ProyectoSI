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
                    <label for="fecha_adjudicacion">Fecha: </label>
                    <input type="date"name="fecha_adjudicacion" id="fecha_adjudicacion">
                    <br>
                    <label for="cot">Tipo de cambio: </label>
                    <label for="cot">7 </label>
                    <label for="monto">monto: </label>
                    <input type="text"name="monto" id="monto">

                </div>
                <div id="Datos_cliente">

                    <select name="cod_pago" id="select-room" class="form-control" onchange="habilitar()" >
                        <option value="nulo">Pago</option>

                        @foreach ($pagos as $pago)
                         
                            <option value="{{$pago->id}}">

                               <spam>{{$pago->id}}</spam>

                            </option>

                        @endforeach
                    </select>


                </div>

                <div id="Datos_cliente">

                    <select name="id_users" id="select-room" class="form-control" onchange="habilitar()" >
                        <option value="nulo">Usuarios</option>

                        @foreach ($users as $user)

                            <option value="{{$user->id}}">

                               <spam>{{$user->name}}</spam>

                            </option>

                        @endforeach
                    </select>


                </div>

                <h5>Estado: </h5> 
                <input type="radio" name="estado" id="activo" value = "0">
                <label for = "activo">Pendiente</label>
                <input type="radio" name="estado" id="finalizado" value = "1">
                <label for = "finalizado">Finalizado</label>



                <button type="submit" class="botonescontrato ">
                     {{ __('Guardar') }}
                </button>
            </form>

        </div>


    </div>

@endsection
