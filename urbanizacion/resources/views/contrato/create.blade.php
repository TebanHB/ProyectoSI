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
                  <div id="Metodo_de_pago">
                    <h5>Forma de pago: </h5>
                    <input type ='button' class="btn btn-link"  value = 'Credito' onclick="location.href = '{{ route('pago.credito.create') }}'"/>
                    <input type ='button' class="btn btn-link"  value = 'Compromiso' onclick="location.href = '{{ route('pago.compromiso.create') }}'"/>
                    <input type ='button' class="btn btn-link"  value = 'Contado' onclick="location.href = '{{ route('pago.contado.create') }}'"/>
                    
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



                <button type="submit" class="botonescontrato ">
                     {{ __('Guardar') }}
                </button>
            </form>

        </div>


    </div>

@endsection
