<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kardex</title>
    <style>
        #kardex{
            font-family: Arial, Helvetica, sans-serif; 
            border-collapse: collapse;
        }
        #kardex td, #kardex th{
            border: 1px solid #222020;
            padding: 4px;
            text-align: center;
        }
        #kardex th{
            padding-top: 10px;
            
            background-color: rgb(26, 153, 37);
            color:rgb(255, 255, 255);
        }
        #titulo{
            text-align: center;
            color:black;
        }
    </style>
</head>
<body>
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
    
    <a href="wecolme.blade.php">
        <img src="img/chiqui.jpg" width="130" > 
       
    </a>
    <u>
        <h1 id='titulo'>KARDEX</h1>  
    </u>

    <div class = 'Datos del Usuario'>
      
        <label for="name" >Nombre: </label>
        
        <label name="nombre" id="nombre" > {{$user->name}}</label> 
     
        <br>  
        <label for="name" '>Código de Pago:</label>
        <label name="nombre" id="nombre" >{{ $pago->id}}</label>     

       
    </div>
    <table id = 'kardex'>
        <thead>
            <tr>
            <th>Nro Cuota</th>
            <th>Fecha Programada</th>
            <th>Cuota</th>
            <th>Fecha de Pago  </th>
            <th>Amortizacion</th>
            <th>Días de Retraso</th>
            <th>Multa</th>
          
            </tr>
            {{-- <th>user</th> --}}
      </thead>
    
      <tbody>
        
        @foreach ($cuotas as $cuota)
                <tr>
            
                  <td>{{($cuota->id == null)? "--": $cuota->id}}</td>
                  <td>{{($cuota->fecha_programada == null)? "--": $cuota->fecha_programada}}</td>
                  <td>{{($cuota->monto_cuota == null)? "--": $cuota->monto_cuota}}</td>
                  <td>{{($cuota->fecha_pagada == null)? "--": $cuota->fecha_pagada}}</td>
                  <td>{{($cuota->amortizacion == null)? "--": $cuota->amortizacion}}</td>
                  <td>{{($cuota->id_mora == null)? "--": $cuota->mora->retraso_dia}}</td>
                  <td>{{($cuota->id_mora == null)? "--": $cuota->mora->multa}}</td>
                  {{-- <td>{{$contrato->users->name}}</td>                 --}}
                 
                </tr>
             
         @endforeach
        </tbody>
    </table>
</div>
</body>
</html>