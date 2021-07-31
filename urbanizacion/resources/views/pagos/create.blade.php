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
        <h1>Nuevo Pago</h1>
        <div class="card-body">
            <form method="POST" action="{{ route('pago.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="usuario">
                </div>
                    </div>
                
                    <h5>Forma de pago: </h5> 
                    <input type ='button' class="btn btn-warning"  value = 'Credito' onclick="location.href = '{{ route('pago.credito.create') }}'"/>
                    <input type ='button' class="btn btn-warning"  value = 'Contado' onclick="location.href = '{{ route('pago.contado.create') }}'"/>
                    <input type ='button' class="btn btn-warning"  value = 'Compromiso' onclick="location.href = '{{ route('pago.compromiso.create') }}'"/>
                    
                    
                    

           
            </form>
            
           
        </div>
    </div>



@endsection
