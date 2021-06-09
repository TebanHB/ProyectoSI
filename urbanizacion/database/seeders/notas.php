<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        DB::table('notas')->insert([
            [
                'descripcion'=>'agrego contrato',
                'fecha'=>'01-02-2018',
                'id_bitacora'=>'1'
            ], 
            [
                'descripcion'=>'agrego contrato',
                'fecha'=>'01-05-2020',
                'id_bitacora'=>'1'
            ],
            [
                'descripcion'=>'agrego contrato',
                'fecha'=>'01-03-2019',
                'id_bitacora'=>'1'
            ],
            [
                'descripcion'=>'agrego contrato',
                'fecha'=>'01-01-2018',
                'id_bitacora'=>'1'
            ],
            [
                'descripcion'=>'agrego contrato',
                'fecha'=>'02-12-2017',
                'id_bitacora'=>'1'
            ],
            [
                'descripcion'=>'agrego contrato',
                'fecha'=>'02-02-2021',
                'id_bitacora'=>'1'
            ],
            [
                'descripcion'=>'agrego contrato',
                'fecha'=>'18-04-2021',
                'id_bitacora'=>'1'
            ]
    }
}
