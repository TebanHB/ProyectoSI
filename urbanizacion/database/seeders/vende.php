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
                'id_lote'=>'66',
                'comision'=>''
            ],
            [
                'id_user'=>'10'.
                'id_lote'=>'67',
                'comision'=>''
            ],
            [
                'id_user'=>'11'.
                'id_lote'=>'68',
                'comision'=>''
            ],
            [
                'id_user'=>'12'.
                'id_lote'=>'',
                'comision'=>''
            ],
        ]);
    }
}
