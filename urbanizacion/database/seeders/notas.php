<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class notas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('nota')->insert([
            [
                'descripcion'=>'agrego contrato',
                'fecha'=>'2018-02-01',
                'id_bitacora'=>'1'
            ], 
            [
                'descripcion'=>'agrego contrato',
                'fecha'=>'2020-05-01',
                'id_bitacora'=>'1'
            ],
            [
                'descripcion'=>'agrego contrato',
                'fecha'=>'2019-03-01',
                'id_bitacora'=>'1'
            ],
            [
                'descripcion'=>'agrego contrato',
                'fecha'=>'2018-01-01',
                'id_bitacora'=>'1'
            ],
            [
                'descripcion'=>'agrego contrato',
                'fecha'=>'2017-12-02',
                'id_bitacora'=>'1'
            ],
            [
                'descripcion'=>'agrego contrato',
                'fecha'=>'2021-02-02',
                'id_bitacora'=>'1'
            ],
            [
                'descripcion'=>'agrego contrato',
                'fecha'=>'2021-04-18',
                'id_bitacora'=>'1'
            ]
        ]);
    }
}
