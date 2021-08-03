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
    @if($tipo=="Ver")
    @foreach($users as $user)
    <div class="container">
        <div class="foto">
            @if($user->url_foto!=null)
                <img src="{{asset()}}" alt=""> //revsisar
            @else
                <img src="https://i.pinimg.com/736x/ea/82/b7/ea82b7a94ffa5a4667c27708f7b653a4.jpg" alt="">
            @endif
        </div>
        <div class="Nombre">
            <label for="">Nombre: </label>
            <label for="">{{$user->name}}</label>
        </div>
        <div class="carnet">
            <label for="">Carnet: </label>
            <label for="">{{$user->carnet}}</label>
        </div>
        <div class="email">
            <label for="">Correo: </label>
            <label for="">{{$user->email}}</label>
        </div>
    </div>
    @endforeach
    @endif
    @if($tipo="Editar")
        <form  method="post" action="{{route('pago.creditopayment',$user->id}}" enctype="multipart/form-data">
            @csrf
        @foreach($users as $user)
            <div class="container">
                <div class="foto">
                    @if($user->url_foto!=null)
                        <img src="{{asset()}}" alt=""> //revsisar
                    @else
                        <img src="https://i.pinimg.com/736x/ea/82/b7/ea82b7a94ffa5a4667c27708f7b653a4.jpg" alt="">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        @endif

                </div>
                <div class="Nombre">
                    <label for="name">Nombre: </label>
                    <input name="name" type="text" placeholder="{{$user->name}}">
                </div>
                <div class="carnet">
                    <label for="carnet">Carnet: </label>
                    <input name="carnet" type="text" placeholder="{{$user->carnet}}">
                </div>
                <div class="email">
                    <label for="email">Correo: </label>
                    <input name="email" type="email" placeholder="{{$user->email}}">
                </div>
                <button type="submit" class="botonescontrato">
                    Guardar
                </button>
            </div>

        @endforeach
        </form>
    @endif
@endsection
