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
                'monto_cuota'=>'255.13'

            ],
            [
                'id_credito'=>'1',
                'id_mora'=>'3',
                'amortizacion'=>'55',
                'monto_cuota'=>'255.13'
            ],
            [
                'id_credito'=>'2',
                'id_mora'=>'2',
                'amortizacion'=>'30',
                'monto_cuota'=>'174.31'

            ],
            [
                'id_credito'=>'3',
                'id_mora'=>'4',
                'amortizacion'=>'60',
                'monto_cuota'=>'239.17'

            ],
            [
                'id_credito'=>'3',
                'id_mora'=>'5',
                'amortizacion'=>'60',
                'monto_cuota'=>'239.17'

            ]

        ]);
    }
}
