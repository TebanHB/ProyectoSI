<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cuota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cuota')->insert([
            [
                'id_credito'=>'1',
                'id_mora'=>'1',
                'amortizacion'=>'55',
                'monto_cuota'=>'255.13',
                'fecha_pagada'=>'2018-02-03',
                'fecha_programada'=>'2018-02-01'

            ],
            [
                'id_credito'=>'1',
                'id_mora'=>'3',
                'amortizacion'=>'55',
                'monto_cuota'=>'255.13',
                'fecha_pagada'=>'2018-03-05',
                'fecha_programada'=>'2018-03-01'
            ],
            [
                'id_credito'=>'2',
                'id_mora'=>'2',
                'amortizacion'=>'30',
                'monto_cuota'=>'174.31',
                'fecha_pagada'=>'2020-05-06',
                'fecha_programada'=>'2020-05-01'
            ],
            [
                'id_credito'=>'3',
                'id_mora'=>'4',
                'amortizacion'=>'60',
                'monto_cuota'=>'239.17',
                'fecha_pagada'=>'2019-03-07',
                'fecha_programada'=>'2019-03-01'
            ],
            [
                'id_credito'=>'3',
                'id_mora'=>'5',
                'amortizacion'=>'60',
                'monto_cuota'=>'239.17',
                'fecha_pagada'=>'2019-04-04',
                'fecha_programada'=>'2019-04-01'
            ]

        ]);
    }
}
