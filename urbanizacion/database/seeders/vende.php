<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ofrece extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vende')->insert([
            [
                'id_user'=>'9'.
                'id_lote'=>'1',
                'comision'=>'1600'   //credito 5% en oferta
            ],
            [
                'id_user'=>'10'.
                'id_lote'=>'2',
                'comision'=>'2023.5' //contado 6%
            ],
            [
                'id_user'=>'11'.
                'id_lote'=>'3',
                'comision'=>'2250'  //compromiso 5%
            ],
            [
                'id_user'=>'12'.
                'id_lote'=>'27',
                'comision'=>'2250'  //compromiso 5%
            ],
            [
                'id_user'=>'12'.
                'id_lote'=>'40',
                'comision'=>'1250' //credito - 5%  oferta 25000
            ],
            [
                'id_user'=>'12'.
                'id_lote'=>'48',
                'comision'=>'1500'      //credito
            ],
            [
                'id_user'=>'12'.
                'id_lote'=>'68',
                'comision'=>'2565'      //contado
            ]
        ]);
    }
}
