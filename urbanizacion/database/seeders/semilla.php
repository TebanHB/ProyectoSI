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
                'name'=>'Mariela Loayza Guzman',
                'carnet'=>'4788255',
                'email'=>'mariela123@gmail.com',
                'password'=>'contra12',
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
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
                'name'=>'Karla Mamani Flores ',
                'carnet'=>'4915532',
                'email'=>'karlitamf5@gmail.com',
                'tipo_vendedor'=>'1',
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'0'  
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
                'name'=>'Cristina Duran Reyes',
                'carnet'=>'5588890',
                'email'=>'cristinini1003@gmail.com',
                'tipo_vendedor'=>'0',
                'tipo_visita'=>'1',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'0'
            ],
        ]);

        DB::table('telefono_persona')->insert([

            [
              'id_users'='1',
              'telefono'='33448957'
            ],
            [
                'id_users'='1',
                'telefono'='67852478'
            ],
            [
                'id_users'='2',
                'telefono'='74563218'
            ],
            [
                'id_users'='3',
                'telefono'='75895757'
            ],
            [
                'id_users'='4',
                'telefono'='3358785'
            ],
            [
                'id_users'='4',
                'telefono'='78168518'
            ],
            [
                'id_users'='5',
                'telefono'='73245218'
            ],
            [
                'id_users'='6',
                'telefono'='74789518'
            ],
            [
                'id_users'='7',
                'telefono'='66563471'
            ],
            [
                'id_users'='8',
                'telefono'='68726987'
            ],
            [
                'id_users'='9',
                'telefono'='6100800'
            ],
            [
                'id_users'='9',
                'telefono'='68587975'

            ],
            [
                'id_users'='10',
                'telefono'='72181418'

            ],
            [
                'id_users'='11',
                'telefono'='72172482'

            ],
            [
                'id_users'='12',
                'telefono'='6897111'

            ],
            [
                'id_users'='13',
                'telefono'='68471002'

            ],
            [
                'id_users'='13',
                'telefono'='66554487'

            ],
            [
                'id_users'='14',
                'telefono'='67894561'

            ],
            [
                'id_users'='15',
                'telefono'='78545225'

            ],
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

        DB::table('compromiso')->insert([
            [
                'monto_pagado'=>'25000',
                'monto_a_pagar'=>'20000',
                'fecha_a_pagar'=>'03-01-2018'
            ],
            [
                'monto_pagado'=>'5000',
                'monto_a_pagar'=>'40000',
                'fecha_a_pagar'=>'03-01-2018'
            ],
        ]);
        DB::table('credito')->insert([
            [
                'cuotainicial'=>'5.760', //Total 32000 //18%
                'plazo'=>'15',
                'interes anual'=>'1.312', // Interes 5
                'cuota mensual'=>'255.13', //Mensual 145,83 //Mensual con Interes 255.13
                'fecha_Prog'=>'1 de cada mes'  //1er de cada Mes
                'fecha inicio'=>'01-02-2018',
                'fecha ultima cuota'=>'01-02-2032',
                'estado'=>'Activo',
                'saldo_financiado'=>'26.240',
                

            ],  
            [
                'cuotainicial'=>'4500', //Total 25000 //18%
                'plazo'=>'15',
                'interes anual'=>'1.025', //Interes 5
                'cuota mensual'=>'174,3067', //Mensual 88.89 //Mensual con Interes 174,3067
                'fecha_Prog'=>'1'  //1er de cada Mes
                'fecha inicio'=>'01-05-2020',
                'fecha ultima cuota'=>'01-05-2035',
                'estado'=>'Activo',
                'saldo_financiado'=>'16.000',
                

            ],  
            [
                'cuotainicial'=>'5.400', //Total 30000 //18%
                'plazo'=>'15',
                'interes anual'=>'1.230',//5
                'cuota mensual'=>'239,17', //Mensual 2186 //Mensual con Interes 
                'fecha_Prog'=>'1'  //1er de cada Mes
                'fecha inicio'=>'01-03-2019',
                'fecha ultima cuota'=>'01-03-2034',
                'estado'=>'Activo',
                'saldo_financiado'=>'24.600',
                

            ]
        ]); 
            DB::table('contado')->insert([
                [
                    'monto'=>'45000',
                    'descuento'=>'2250',
                    'fecha_de_pago'=>'02-02-2021' 
                ],
                [
                    'monto'=>'35500',
                    'descuento'=>'1775',
                    'fecha_de_pago'=>'18-04-2021' 
                ]
            ]);  
    
    }
}
