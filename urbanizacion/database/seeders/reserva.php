<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class reserva extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('reserva')->insert([
            [
                'id_user'=>'13',
                'id_lote'=>'5',
                'horario_de_visita'=>'05-12-2018 15:00:00'
            ],
            [
                'id_user'=>'14',
                'id_lote'=>'38',
                'horario_de_visita'=>'05-12-2018 14:30:00'
            ],
            [
                'id_user'=>'15',
                'id_lote'=>'57',
                'horario_de_visita'=>'25-06-2021 10:30:00'
            ]
        ]);
    }
}
