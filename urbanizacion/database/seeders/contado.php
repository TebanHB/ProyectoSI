<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class contado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contado')->insert([
            [
                'monto'=>'42750',
                'descuento'=>'2250',        //5%
                'fecha_de_pago'=>'02-02-2021'
            ],
            [
                'monto'=>'33725',
                'descuento'=>'1775',
                'fecha_de_pago'=>'04-18-2021'
            ]
        ]);
    }
}
