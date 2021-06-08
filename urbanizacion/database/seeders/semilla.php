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
                'name'=>'Chino',
                'email'=>'chinoselacome@gmail.com',
                'password'=>'selacome',
                'tipo_vendedor'=>'1',
                'tipo_visita'=>'1',
                'tipo_administrador'=>'1',
                'tipo_cliente'=>'1'
            ],
            [
                'name'=>'Camila',
                'email'=>'lagfa@gmail.com',
                'password'=>'toxicaxd',
                'tipo_vendedor'=>'1',
                'tipo_visita'=>'1',
                'tipo_administrador'=>'1',
                'tipo_cliente'=>'1'
            ],
            [
                'name'=>'angelica',
                'email'=>'nosequedecir@gmail.com',
                'password'=>'hola123',
                'tipo_vendedor'=>'1',
                'tipo_visita'=>'1',
                'tipo_administrador'=>'1',
                'tipo_cliente'=>'1'
            ]
        ]);
    }
}
