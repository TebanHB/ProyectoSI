<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pago extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pago')->insert([
            [
            'tipo'=>'credito',
            'cuota_inicial'=>'5760', //Total 32000 //18%
            'plazo'=>'15',
            'interes_anual'=>'1312', // Interes 5
            'cuota_mensual'=>'255.13', //Mensual 145,83 //Mensual con Interes 255.13
            'fecha_Prog'=>'1 de cada mes',  //1er de cada Mes
            'fecha_inicio'=>'2018-02-01',
            'fecha_ultima_cuota'=>'2032-02-01',
            'estado'=>'Activo',
            'saldo_financiado'=>'26240',
            'monto_pagado'=>null,
            'monto_a_pagar'=>null,
            'fecha_pago_garantia'=>null,
            'fecha_a_pagar'=>null,
            'monto'=>null,
            'descuento'=>null,       
            'fecha_de_pago'=>null
          
        ] ,
        [
            'tipo'=>'credito',
            'cuota_inicial'=>'4500', //Total 25000 //18%
            'plazo'=>'15',
            'interes_anual'=>'1025', //Interes 5
            'cuota_mensual'=>'174.31', //Mensual 88.89 //Mensual con Interes 174,3067
            'fecha_Prog'=>'1 de cada mes',  //1er de cada Mes
            'fecha_inicio'=>'2020-05-01',
            'fecha_ultima_cuota'=>'2035-05-01',
            'estado'=>'Activo',
            'saldo_financiado'=>'16000',
            'monto_pagado'=>null,
            'monto_a_pagar'=>null,
            'fecha_pago_garantia'=>null,
            'fecha_a_pagar'=>null,
            'monto'=>null,
            'descuento'=>null,       
            'fecha_de_pago'=>null
        ],
        [
            'tipo'=>'credito',
            'cuota_inicial'=>'5400', //Total 30000 //18%
            'plazo'=>'15',
            'interes_anual'=>'1230',//5
            'cuota_mensual'=>'239.17', //Mensual 136,67 //Mensual con Interes 239,17
            'fecha_Prog'=>'1 de cada mes',  //1er de cada Mes
            'fecha_inicio'=>'2019-03-01',
            'fecha_ultima_cuota'=>'2034-03-01',
            'estado'=>'Activo',
            'saldo_financiado'=>'24600',
            'monto_pagado'=>null,
            'monto_a_pagar'=>null,
            'fecha_pago_garantia'=>null,
            'fecha_a_pagar'=>null,
            'monto'=>null,
            'descuento'=>null,       
            'fecha_de_pago'=>null
        ],
        [
            'tipo'=>'compromiso',
            'cuota_inicial'=>null, //Total 32000 //18%
            'plazo'=>null,
            'interes_anual'=>null, // Interes 5
            'cuota_mensual'=>null, //Mensual 145,83 //Mensual con Interes 255.13
            'fecha_Prog'=>null,  //1er de cada Mes
            'fecha_inicio'=>null,
            'fecha_ultima_cuota'=>null,
            'estado'=>null,
            'saldo_financiado'=>null,
            'monto_pagado'=>'25000',
            'monto_a_pagar'=>'20000',
            'fecha_pago_garantia'=>'2018-01-01',//'01-01-2018',
            'fecha_a_pagar'=>'2018-04-03',//'03-04-2018'
            'monto'=>null,
            'descuento'=>null,       
            'fecha_de_pago'=>null
          
        ] ,
        [
        
            'tipo'=>'compromiso',
            'cuota_inicial'=>null, //Total 32000 //18%
            'plazo'=>null,
            'interes_anual'=>null, // Interes 5
            'cuota_mensual'=>null, //Mensual 145,83 //Mensual con Interes 255.13
            'fecha_Prog'=>null,  //1er de cada Mes
            'fecha_inicio'=>null,
            'fecha_ultima_cuota'=>null,
            'estado'=>null,
            'saldo_financiado'=>null,
            'monto_pagado'=>'35000',
            'monto_a_pagar'=>'10000',
            'fecha_pago_garantia'=>'2017-02-12',//'12-2-2017',
            'fecha_a_pagar'=>'2018-03-01',//'1-3-2018'
            'monto'=>null,
            'descuento'=>null,       
            'fecha_de_pago'=>null
          
        ] ,
        [
            'tipo'=>'contado',
            'cuota_inicial'=>null, //Total 32000 //18%
            'plazo'=>null,
            'interes_anual'=>null, // Interes 5
            'cuota_mensual'=>null, //Mensual 145,83 //Mensual con Interes 255.13
            'fecha_Prog'=>null,  //1er de cada Mes
            'fecha_inicio'=>null,
            'fecha_ultima_cuota'=>null,
            'estado'=>null,
            'saldo_financiado'=>null,
            'monto_pagado'=>null,
            'monto_a_pagar'=>null,
            'fecha_pago_garantia'=>null,
            'fecha_a_pagar'=>null,
            'monto'=>'42750',
            'descuento'=>'2250',        //5%
            'fecha_de_pago'=>'2021-02-02'
          
        ] ,
        [
            'tipo'=>'contado',
            'cuota_inicial'=>null, //Total 32000 //18%
            'plazo'=>null,
            'interes_anual'=>null, // Interes 5
            'cuota_mensual'=>null, //Mensual 145,83 //Mensual con Interes 255.13
            'fecha_Prog'=>null,  //1er de cada Mes
            'fecha_inicio'=>null,
            'fecha_ultima_cuota'=>null,
            'estado'=>null,
            'saldo_financiado'=>null,
            'monto_pagado'=>null,
            'monto_a_pagar'=>null,
            'fecha_pago_garantia'=>null,
            'fecha_a_pagar'=>null,
            'monto'=>'33725',
            'descuento'=>'1775',
            'fecha_de_pago'=>'2021-04-18'
        ] 
    
        ]);
    }
}
