<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class manzana extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('manzana')->insert([
            [
                'superficie_manzana'=>'3640',	 //10*100/terreno chico, 8*150 terreno mediano, 8*180/terreno grande
                'cantidad_de_terreno'=>'26'
            ],
            [
                'superficie_manzana'=>'2900',	 //8chico - 8 mediano - 5 grande
                'cantidad_de_terreno'=>'21'
            ],
            [
                'superficie_manzana'=>'3300',	//12 chico- 8 mediano - 5 grandes
                'cantidad_de_terreno'=>'25'
            ]

        ]);
    }
}
