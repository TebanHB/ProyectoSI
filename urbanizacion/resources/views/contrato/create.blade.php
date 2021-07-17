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
        <h1>Crear contrato</h1> 
        <div class="card-body">
            <form method="POST" action="{{ route('contrato.store') }}" enctype="multipart/form-data">
                @csrf
                
                <body class="Metodo de pago">
                    
                    Forma de pago: </br>
                    <input type="radio" name="" id="">compromiso
                    <input type="radio" name="" id="">contado 
                     <input type="radio" name="" id="">credito
                </body>


            </form>
        </div>
    </div>  
@endsection