<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class semilla extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name'=>'Carlos Castro Flores ',
                'email'=>'carloscortezflores03@gmail.com',
                'password'=>'carlos1234',
                'tipo_vendedor'=>'1',
                'tipo_visita'=>'1',
                'tipo_administrador'=>'1',
                'tipo_cliente'=>'1'
            ],
            [
                
            ],
            [
                
            ]
        ]);
        DB::table('pago')->insert([

        ]};

    }
}
