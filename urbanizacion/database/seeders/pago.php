<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pago extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pago')->insert([
            [
                'tipo'=>'credito'
            ],
            [
                'tipo'=>'compromiso'
            ],
            [
                'tipo'=>'contado'
            ]
        ]);
    }
}
