<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mora extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mora')->insert([  // la mora es el 3% de la cuota mensual con interés
            [
                'multa'=>'15.31',//primero
                'retraso_dia'=>'2'

            ],
            [
                'multa'=>'26.15',//segundo
                'retraso_dia'=>'5'

            ],
            [
                'multa'=>'30.62',// primero
                'retraso_dia'=>'4'

            ],
            [
                'multa'=>'43.05',//tercero
                'retraso_dia'=>'6'

            ],
            [
                'multa'=>'21.53',//tercero
                'retraso_dia'=>'3'

            ]
        ]);
    }
}
