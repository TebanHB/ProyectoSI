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
        <h1>formulario contrato</h1> 
        <div class="card-body">
            <form method="POST" action="{{ route('contrato.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="monto" class="col-md-4 col-form-label text-md-right">{{ __('Monto') }}</label>

                    <div class="col-md-6">
                        <input id="monto" type="number" class="form-control @error('monto') is-invalid @enderror" name="monto" value="{{ old('monto') }}"  autofocus>

                        @error('monto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fecha_adjudicacion" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de adjudicacion') }}</label>
                    <div class="col-md-6">
                        <input id="user" type="date" class="form-control @error('fecha_adjudicacion') is-invalid @enderror" name="fecha_adjudicacion" value="{{ old('fecha_adjudicacion') }}"  autocomplete="fecha_adjudicacion" autofocus>

                        @error('fecha_adjudicacion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

        
                
                <div class="form-group row">
                    <label for="location_id" class="col-md-4 col-form-label text-md-right">{{ __('Ubicacion') }}</label>
                    <div class="col-md-6">
                        <select name="codigo_pago" id="codigo_pago">
                            <option value="">--selecciona tu ubicacion--</option>
                        @foreach ($pagos as $pago)                                        
                        <option value="{{$pago->id}}">{{" -> ".$pago->tipo}}</option>                                    
                        @endforeach 
                        </select>
                        @error('codigo_pago')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

            <input type="hidden" name="id_user" value="{{Auth::user()->id}}">

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-info ">
                            {{ __('Crear') }}
                            <i class="fas fa-paw"></i>
                        </button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>  
@endsection