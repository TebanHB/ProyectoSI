<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class bitacora extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bitacora')->insert([
           [
                'id_user'=>'1'
           ]
        ]);
    }
}
