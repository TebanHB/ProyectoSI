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
    <div class="containercreatetelefono">
        <h1>Crear Telefono</h1>
        <div class="card-body">
            <form method="POST" action="{{ route('telefonoPersona.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="usuarioformulariocreate">
                    <label for = "telefono">Numero Telefonico</label>
                    <input type="text" name="telefono" id="telefono">          
                    <button type="submit" class="btn btn-info ">
                        {{ __('Guardar') }}
                    </button>         
                </div>
                    
            </form>
        </div>
    </div>



@endsection