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
                'tipo_vendedor'=>'1',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'0'  
            ],
            [
                'name'=>'Kevin Garcia Yucra ',
                'carnet'=>'5545532',
                'email'=>'kevingarcia45@gmail.com',
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'1',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'0'  
            ],
            [
                'name'=>'Mariela Loayza Guzman',
                'carnet'=>'4788255',
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
            ],
            [
                'name'=>'Daniel Cortez Roca',
                'carnet'=>'1894126',
                'email'=>'danicroca12@gmail.com',
                'password'=>'danicr12',
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'1'
            ],
[
                'name'=>'Milagros Rodriguez Cabello',
                'carnet'=>'5798712',
                'email'=>'milarodriguez56@gmail.com',
                'tipo_vendedor'=>'1',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'0'
            ],

[
                'name'=>'Marianela Coimbra Caballero',
                'carnet'=>'8465684',
                'email'=>'marianelacc@gmail.com',
                'password'=>'mari1234',
                'tipo_vendedor'=>'1',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'0'
            ],
[
                'name'=>'Junior Figueroa Prado',
                'carnet'=>'6867257',
                'email'=>'jusfipra23@gmail.com',
                'password'=>'jusFigueroa123',
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'1'
            ],
            [
                'name'=>'Juan Carlos Lazo Zabala',
                'carnet'=>'4687321',
                'email'=>'juancarlos83@gmail.com',
                'password'=>'juancalazo83',
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'1',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'0'
            ],
            [
                'name'=>'Carolina Duran Reyes',
                'carnet'=>'5687890',
                'email'=>'carolinitatubebesota12@gmail.com',
                'password'=>'Bebota701',
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'1'
            ],
            [
                'name'=>'Cristina Duran Reyes',
                'carnet'=>'5588890',
                'email'=>'cristinini1003@gmail.com',
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'1',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'0'
            ]
        ]);

        DB::table('users')->insert([

            [

            ]


        ]);

    }
}
