<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
                'tipo_visita'=>'0',
                'tipo_administrador'=>'0',
                'tipo_cliente'=>'1'
            ]

        ]);

        DB::table('telefono_persona')->insert([

            [
              'id_users'=>'1',
              'telefono'=>'33448957'
            ],
            [
                'id_users'=>'1',
                'telefono'=>'67852478'
            ],
            [
                'id_users'=>'2',
                'telefono'=>'74563218'
            ],
            [
                'id_users'=>'3',
                'telefono'=>'75895757'
            ],
            [
                'id_users'=>'4',
                'telefono'=>'3358785'
            ],
            [
                'id_users'=>'4',
                'telefono'=>'78168518'
            ],
            [
                'id_users'=>'5',
                'telefono'=>'73245218'
            ],
            [
                'id_users'=>'6',
                'telefono'=>'74789518'
            ],
            [
                'id_users'=>'7',
                'telefono'=>'66563471'
            ],
            [
                'id_users'=>'8',
                'telefono'=>'68726987'
            ],
            [
                'id_users'=>'9',
                'telefono'=>'6100800'
            ],
            [
                'id_users'=>'9',
                'telefono'=>'68587975'

            ],
            [
                'id_users'=>'10',
                'telefono'=>'72181418'

            ],
            [
                'id_users'=>'11',
                'telefono'=>'72172482'

            ],
            [
                'id_users'=>'12',
                'telefono'=>'6897111'

            ],
            [
                'id_users'=>'13',
                'telefono'=>'68471002'

            ],
            [
                'id_users'=>'13',
                'telefono'=>'66554487'

            ],
            [
                'id_users'=>'14',
                'telefono'=>'67894561'

            ],
            [
                'id_users'=>'15',
                'telefono'=>'78545225'

            ]
            ]);
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
                'fecha_pago_garantia'=>'01-01-2018',
                'fecha_a_pagar'=>'03-04-2018'
            ],
            [
                'monto_pagado'=>'35000',
                'monto_a_pagar'=>'20000',
                'fecha_pago_garantia'=>'02-12-2017',
                'fecha_a_pagar'=>'03-01-2018'
            ]
        ]);
        DB::table('credito')->insert([
            [
                'cuotainicial'=>'5.760', //Total 32000 //18%
                'plazo'=>'15',
                'interes anual'=>'1.312', // Interes 5
                'cuota mensual'=>'255.13', //Mensual 145,83 //Mensual con Interes 255.13
                'fecha_Prog'=>'1 de cada mes',  //1er de cada Mes
                'fecha inicio'=>'01-02-2018',
                'fecha ultima cuota'=>'01-02-2032',
                'estado'=>'Activo',
                'saldo_financiado'=>'26.240'


            ],
            [
                'cuotainicial'=>'4500', //Total 25000 //18%
                'plazo'=>'15',
                'interes anual'=>'1.025', //Interes 5
                'cuota mensual'=>'174,3067', //Mensual 88.89 //Mensual con Interes 174,3067
                'fecha_Prog'=>'1',  //1er de cada Mes
                'fecha inicio'=>'01-05-2020',
                'fecha ultima cuota'=>'01-05-2035',
                'estado'=>'Activo',
                'saldo_financiado'=>'16.000'


            ],
            [
                'cuotainicial'=>'5.400', //Total 30000 //18%
                'plazo'=>'15',
                'interes anual'=>'1.230',//5
                'cuota mensual'=>'239,17', //Mensual 136,67 //Mensual con Interes 239,17
                'fecha_Prog'=>'1',  //1er de cada Mes
                'fecha inicio'=>'01-03-2019',
                'fecha ultima cuota'=>'01-03-2034',
                'estado'=>'Activo',
                'saldo_financiado'=>'24.600'


            ]
        ]);
            DB::table('contado')->insert([
                [
                    'monto'=>'42750',
                    'descuento'=>'2250',        //5%
                    'fecha_de_pago'=>'02-02-2021'
                ],
                [
                    'monto'=>'33725',
                    'descuento'=>'1775',
                    'fecha_de_pago'=>'18-04-2021'
                ]
            ]);
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
            DB::table('contrato')->insert([
                [
                    'fecha_adjudicacion'=>'01-02-2018',
                    'monto'=>'32000',
                    'id_user'=>'2',
                    'codigo_pago'=>'1'

                ],
                [
                    'fecha_adjudicacion'=>'01-05-2020',
                    'monto'=>'25000',
                    'id_user'=>'3',
                    'codigo_pago'=>'1'
                ],
                [
                    'fecha_adjudicacion'=>'01-03-2019',
                    'monto'=>'30000',
                    'id_user'=>'4',
                    'codigo_pago'=>'1'

                ],
                [
                    'fecha_adjudicacion'=>'01-01-2018',
                    'monto'=>'45000',
                    'id_user'=>'5',
                    'codigo_pago'=>'2'

                ],
                [
                    'fecha_adjudicacion'=>'02-12-2017',
                    'monto'=>'55000',
                    'id_user'=>'6',
                    'codigo_pago'=>'2'

                ],
                [
                    'fecha_adjudicacion'=>'02-02-2021',
                    'monto'=>'42750',
                    'id_user'=>'7',
                    'codigo_pago'=>'3'

                ],
                [
                    'fecha_adjudicacion'=>'18-04-2021',
                    'monto'=>'33725',
                    'id_user'=>'8',
                    'codigo_pago'=>'3'

                ]

            ]);
            DB::table('mora')->insert([  // la mora es el 3% de la cuota mensual con interés
                [
                    'multa'=>'15.31',//primero
                    'retraso_dia'=>'2'

                ],
                [
                    'multa'=>'26.15',//segundo
                    'retraso_dia'=>'5'

                ],
                [
                    'multa'=>'30.62',// primero
                    'retraso_dia'=>'4'

                ],
                [
                    'multa'=>'43.05',//tercero
                    'retraso_dia'=>'6'

                ],
                [
                    'multa'=>'21.53',//tercero
                    'retraso_dia'=>'3'

                ]
            ]);

    }
}
