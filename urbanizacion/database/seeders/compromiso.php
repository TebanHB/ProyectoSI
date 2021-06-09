<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class compromiso extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('compromiso')->insert([
            [
                'monto_pagado'=>'25000',
                'monto_a_pagar'=>'20000',
                'fecha_pago_garantia'=>'01-01-2018',
                'fecha_a_pagar'=>'03-04-2018'
            ],
            [
                'monto_pagado'=>'35000',
                'monto_a_pagar'=>'10000',
                'fecha_pago_garantia'=>'12-2-2017',
                'fecha_a_pagar'=>'1-3-2018'
            ]
        ]);
    }
}
