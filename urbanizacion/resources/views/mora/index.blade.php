@extends('layouts.app')

@section('content')
{{-- esto es pa mostrar errores --}}
@if ($errors->count() > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<br>

<div class="container">
    <br>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><h2>Mora</h2></li>
        {{-- <li class="list-group-item"><a href= {{route('user.register') }} ><button type="button" class="btn btn-success btn-lg btn-block">Nuevo usuario</button></a></li> --}}
    </ul>
    <table class="table table-striped">
        <thead>
              <th>Multa</th>
              <th>Retraso Dia</th>
        </thead>
        <tbody>
            @foreach ($moras as $mora)
               <tr>
                    <td>{{($mora->multa == null)? "--": $mora->multa }}</td>
                    <td>{{($mora->retraso_dia == null)? "--": $mora->retraso_dia}}</td>
    
                    {{-- <td>
                        <a href="{{route('user.permissions',$user->id)}}"><button type="button" class="btn btn-warning">Roles</button></a>
                    </td> --}}
               </tr> 
            @endforeach
        </tbody>
    </table>
    {{-- <div class="table table-striped">{{$pagos->links()}}</div> --}}
</div>
@endsection