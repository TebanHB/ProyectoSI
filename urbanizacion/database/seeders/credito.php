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
                'cuotainicial'=>'5.760', //Total 32000 //18%
                'plazo'=>'15',
                'interes anual'=>'1.312', // Interes 5
                'cuota mensual'=>'255.13', //Mensual 145,83 //Mensual con Interes 255.13
                'fecha_Prog'=>'1 de cada mes',  //1er de cada Mes
                'fecha inicio'=>'02-01-2018',
                'fecha ultima cuota'=>'02-01-2032',
                'estado'=>'Activo',
                'saldo_financiado'=>'26.240'


            ],
            [
                'cuotainicial'=>'4500', //Total 25000 //18%
                'plazo'=>'15',
                'interes anual'=>'1.025', //Interes 5
                'cuota mensual'=>'174,31', //Mensual 88.89 //Mensual con Interes 174,3067
                'fecha_Prog'=>'1',  //1er de cada Mes
                'fecha inicio'=>'05-01-2020',
                'fecha ultima cuota'=>'05-01-2035',
                'estado'=>'Activo',
                'saldo_financiado'=>'16.000',


            ],
            [
                'cuotainicial'=>'5.400', //Total 30000 //18%
                'plazo'=>'15',
                'interes anual'=>'1.230',//5
                'cuota mensual'=>'239,17', //Mensual 136,67 //Mensual con Interes 239,17
                'fecha_Prog'=>'1',  //1er de cada Mes
                'fecha inicio'=>'03-01-2019',
                'fecha ultima cuota'=>'03-01-2034',
                'estado'=>'Activo',
                'saldo_financiado'=>'24.600',


            ]
        ]);
    }
}
