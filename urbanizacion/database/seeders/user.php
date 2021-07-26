<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class user extends Seeder
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
                'email'=>'carloscastroflores03@gmail.com',
                'password'=>Hash::make('carlos1234'),
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'1',
                'tipo_cliente'=>'0'
            ],


            [
                'name'=>'Carolina Duran Reyes',
                'carnet'=>'5687890',
                'email'=>'carolinitatubebesota12@gmail.com',
                'password'=>Hash::make('Bebota701'),
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'1'
            ],
            [
                'name'=>'Juan Cabrera Castro ',
                'carnet'=>'4517562',
                'email'=>'juancito@gmail.com',
                'password'=>Hash::make('JCC18'),
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'1'
            ],
            [
                'name'=>'Jose Wurner Yucra ',
                'carnet'=>'4915532',
                'email'=>'wurner589@gmail.com',
                'password'=>Hash::make('wurner479'),
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'1'
            ],

            [
                'name'=>'Mariela Loayza Guzman',
                'carnet'=>'4788255',
                'email'=>'mariela123@gmail.com',
                'password'=>Hash::make('contra12'),
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'1'

            ],
            [
                'name'=>'Esteban Hurtado Blumberg',
                'carnet'=>'7833036',
                'email'=>'e_s_t_e_b_a_n-hurtado@hotmail.com',
                'password'=>Hash::make('1234'),
                'tipo_vendedor'=>'1',
                'tipo_visita'=>'1',
                'tipo_administrador'=>'1',
                'tipo_cliente'=>'1'

            ],
            [
                'name'=>'Fabio Fernandez',
                'carnet'=>'4789255',
                'email'=>'FFernandez@gmail.com',
                'password'=>Hash::make('fabiofer'),
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'1'
            ],
            [
                'name'=>'Daniel Cortez Roca',
                'carnet'=>'1894126',
                'email'=>'danicroca12@gmail.com',
                'password'=>Hash::make('danicr12'),
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'1'
            ],
            [
                'name'=>'Junior Figueroa Prado',
                'carnet'=>'6867257',
                'email'=>'jusfipra23@gmail.com',
                'password'=>hash::make('jusFigueroa123'),
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'1'
            ],

            [
                'name'=>'Karla Mamani Flores ',
                'carnet'=>'4915532',
                'email'=>'karlitamf5@gmail.com',
                'password'=>hash::make('kar45'),
                'tipo_vendedor'=>'1',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'0'
            ],
            [
                'name'=>'Camila Duran Arteaga ',
                'carnet'=>'4915532',
                'email'=>'camilitada@gmail.com',
                'password'=>hash::make('camilarex1'),
                'tipo_vendedor'=>'1',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'0'
            ],


            [
                'name'=>'Milagros Rodriguez Cabello',
                'carnet'=>'5798712',
                'email'=>'milarodriguez56@gmail.com',
                'password'=>hash::make('mila78as'),
                'tipo_vendedor'=>'1',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'0'
            ],

            [
                'name'=>'Marianela Coimbra Caballero',
                'carnet'=>'8465684',
                'email'=>'marianelacc@gmail.com',
                'password'=>hash::make('mair592'),
                'tipo_vendedor'=>'1',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'0'
            ],
            [
                'name'=>'Juan Carlos Lazo Zabala',
                'carnet'=>'4687321',
                'email'=>'juancarlos83@gmail.com',
                'password'=>hash::make('juancalazo83'),
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'1',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'0'
            ],

            [
                'name'=>'Cristina Duran Reyes',
                'carnet'=>'5588890',
                'email'=>'cristinini1003@gmail.com',
                'password'=>hash::make('cristinini45'),
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'1',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'0'
            ],
            [
                'name'=>'Dantte Montaner Reyes',
                'carnet'=>'5687890',
                'email'=>'prodante1998@gmail.com',
                'password'=>Hash::make('prodantepvp4588'),
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'1',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'0'
            ]

        ]);
    }
}
