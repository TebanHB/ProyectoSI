<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class contrato extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contrato')->insert([
            [
                'fecha_adjudicacion'=>'01-02-2018',
                'monto'=>'32000',
                'id_user'=>'2',
                'codigo_pago'=>'1'

            ],
            [
                'fecha_adjudicacion'=>'01-05-2020',
                'monto'=>'25000',
                'id_user'=>'3',
                'codigo_pago'=>'1'
            ],
            [
                'fecha_adjudicacion'=>'01-03-2019',
                'monto'=>'30000',
                'id_user'=>'4',
                'codigo_pago'=>'1'

            ],
            [
                'fecha_adjudicacion'=>'01-01-2018',
                'monto'=>'45000',
                'id_user'=>'5',
                'codigo_pago'=>'2'

            ],
            [
                'fecha_adjudicacion'=>'02-12-2017',
                'monto'=>'45000',
                'id_user'=>'6',
                'codigo_pago'=>'2'

            ],
            [
                'fecha_adjudicacion'=>'02-02-2021',
                'monto'=>'42750',
                'id_user'=>'7',
                'codigo_pago'=>'3'

            ],
            [
                'fecha_adjudicacion'=>'18-04-2021',
                'monto'=>'33725',
                'id_user'=>'8',
                'codigo_pago'=>'3'

            ]

        ]);
    }
}
