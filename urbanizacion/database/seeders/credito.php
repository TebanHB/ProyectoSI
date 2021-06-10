<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class credito extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('credito')->insert([
            [
                'cuota_inicial'=>'5760', //Total 32000 //18%
                'plazo'=>'15',
                'interes_anual'=>'1312', // Interes 5
                'cuota_mensual'=>'255.13', //Mensual 145,83 //Mensual con Interes 255.13
                'fecha_Prog'=>'1 de cada mes',  //1er de cada Mes
                'fecha_inicio'=>'2018-02-01',
                'fecha_ultima_cuota'=>'2032-02-01',
                'estado'=>'Activo',
                'saldo_financiado'=>'26240',
                'pago_id'=>'1'
            ] ,
            [
                'cuota_inicial'=>'4500', //Total 25000 //18%
                'plazo'=>'15',
                'interes_anual'=>'1025', //Interes 5
                'cuota_mensual'=>'174.31', //Mensual 88.89 //Mensual con Interes 174,3067
                'fecha_Prog'=>'1 de cada mes',  //1er de cada Mes
                'fecha_inicio'=>'2020-05-01',
                'fecha_ultima_cuota'=>'2035-05-01',
                'estado'=>'Activo',
                'saldo_financiado'=>'16000',
                'pago_id'=>'1'
            ],
            [
                'cuota_inicial'=>'5400', //Total 30000 //18%
                'plazo'=>'15',
                'interes_anual'=>'1230',//5
                'cuota_mensual'=>'239.17', //Mensual 136,67 //Mensual con Interes 239,17
                'fecha_Prog'=>'1 de cada mes',  //1er de cada Mes
                'fecha_inicio'=>'2019-03-01',
                'fecha_ultima_cuota'=>'2034-03-01',
                'estado'=>'Activo',
                'saldo_financiado'=>'24600',
                'pago_id'=>'1'
            ]
        ]);
    }
}
