<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ayuda</h1>
    <table class="newtable">
        <thead>
              <th>Tipo</th>
              <th>Cuota inicial</th>
              <th>Plazo</th>
              <th>Interes anual</th>
              <th>Cuota Mensual</th>
              <th>Fecha Programada</th>
              <th>Fecha de inicio</th>
              <th>Fecha de la ultima cuota</th>
              <th>Estado</th>
              <th>Saldo Financiado</th>
              <th>monto_pagado</th>
              <th>monto_a_pagar</th>
              <th>fecha_pago_garantia</th>
              <th>fecha_a_pagar</th>
              <th>monto</th>
              <th>descuento</th>
              <th>fecha_de_pago</th>

        </thead>
        <tbody>
            @foreach ($pagos as $pago)
               <tr>
                    <td>{{($pago->tipo == null)? "--": $pago->tipo}}</td>
                    <td>{{($pago->cuota_inicial == null)? "--": $pago->cuota_inicial}}</td>
                    <td>{{($pago->plazo == null)? "--": $pago->plazo}}</td>
                    <td>{{($pago->interes_anual == null)? "--": $pago->interes_anual}}</td>
                    <td>{{($pago->cuota_mensual == null)? "--": $pago->cuota_mensual}}</td>
                    <td>{{($pago->fecha_prog == null)? "--": $pago->fecha_prog}}</td>
                    <td>{{($pago->fecha_inicio == null)? "--": $pago->fecha_inicio}}</td>
                    <td>{{($pago->fecha_ultima_cuota == null)? "--": $pago->fecha_ultima_cuota}}</td>
                    <td>{{($pago->estado == null)? "--": $pago->estado}}</td>
                    <td>{{($pago->saldo_financiado == null)? "--": $pago->saldo_financiado}}</td>
                    
                    <td>{{($pago->monto_pagado == null)? "--": $pago->monto_pagado}}</td>
                    <td>{{($pago->monto_a_pagar == null)? "--": $pago->monto_a_pagar}}</td>
                    <td>{{($pago->fecha_pago_garantia == null)? "--": $pago->fecha_pago_garantia}}</td>
                    <td>{{($pago->fecha_a_pagar == null)? "--": $pago->fecha_a_pagar}}</td>
                    <td>{{($pago->monto == null)? "--": $pago->monto}}</td>
                    <td>{{($pago->descuento == null)? "--": $pago->descuento}}</td>
                    <td>{{($pago->fecha_de_pago == null)? "--": $pago->fecha_de_pago}}</td>
                    {{-- <td>
                        <a href="{{route('user.permissions',$user->id)}}"><button type="button" class="btn btn-warning">Roles</button></a>
                    </td> --}}
                    @if($pago->tipo == 'credito')
                        <td><a href="{{route('cuota.cuotas', $pago->id)}}">Ver Cuotas</a></td>
                    @endif
               </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>