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
                'carnet'=>'4717552',
                'email'=>'carloscortezflores03@gmail.com',
                'password'=>'carlos1234',
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'1',
                'tipo_cliente'=>'0'
            ],
            [
                'name'=>'Karla Mamani Flores ',
                'carnet'=>'4915532',
                'email'=>'karlitamf5@gmail.com',
                'password'=>'carlos1234',

                'tipo_vendedor'=>'1',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'0'  
            ],
            [
                'name'=>'Juan Cabrera Castro ',
                'carnet'=>'4517562',
                'email'=>'juancito@gmail.com',
                'password'=>'JCC18',
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'1'  
            ],
            [
                'name'=>'Jose Wurner Yucra ',
                'carnet'=>'4915532',
                'email'=>'wurner589@gmail.com',
                'password'=>'wurner479',
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'1'  
            ],
            [
                'name'=>'Camila Duran Arteaga ',
                'carnet'=>'4915532',
                'email'=>'camilitada@gmail.com',
                'password'=>'carlos1234',

                'tipo_vendedor'=>'1',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'0'  
            ],
            [
                'name'=>'Kevin Garcia Yucra ',
                'carnet'=>'5545532',
                'email'=>'kevingarcia45@gmail.com',
                'password'=>'carlos1234',

                'tipo_vendedor'=>'0',
                'tipo_visita'=>'1',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'0'  
            ],
            [
                'name'=>'Mariela Loayza Guzman',
                'carnet'=>'4789255',
                'email'=>'mariela123@gmail.com',
                'password'=>'contra12',
                'tipo_vendedor'=>'1',
                'tipo_visita'=>'1',
                'tipo_administrador'=>'1',
                'tipo_cliente'=>'1'

            ],
            [
                'name'=>'Fabio Fernandez',
                'carnet'=>'4789255',
                'email'=>'FFernandez@gmail.com',
                'password'=>'fabiofer',
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'1'
            ]
        ]);
       

    }
}
