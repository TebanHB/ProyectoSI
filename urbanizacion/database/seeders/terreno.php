<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class terreno extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('terreno')->insert([
            [
                'id_contrato'=>'1',          //terreno vendido     //1
                'id_manzana'=>'1',
                'id_users'=>'2',
                'superficie_terreno'=>'150',
                'precio'=>'32000',
                'estado_terreno'=>'ocupado'
               
            ],
            [
                'id_contrato'=>'7',   //terreno vendido  //2
                'id_manzana'=>'1',
                'id_users'=>'8',
                'superficie_terreno'=>'150',
                'precio'=>'33725',
                'estado_terreno'=>'ocupado'
            ],

            [
                'id_contrato'=>'4',    //terreno vendido  //3
                'id_manzana'=>'1',
                'id_users'=>'5',
                'superficie_terreno'=>'180',
                'precio'=>'45000',
                'estado_terreno'=>'ocupado'
            ],
           
            [
                'id_manzana'=>'1',		
                'superficie_terreno'=>'100',    //4
                'precio'=>'35000',
                'estado_terreno'=>'libre'
            ],
            [
                'id_manzana'=>'1',
                'superficie_terreno'=>'100',    //5
                'precio'=>'35000',
                'estado_terreno'=>'libre'
            ],
            [
                'id_manzana'=>'1',		
                'superficie_terreno'=>'100',    //6
                'precio'=>'35000',
                'estado_terreno'=>'libre'
            ],
            [
                'id_manzana'=>'1',		
                'superficie_terreno'=>'100',
                'precio'=>'35000',                  //7
                'estado_terreno'=>'libre'
            ],
            [
                'id_manzana'=>'1',
                'superficie_terreno'=>'100',         //8
                'precio'=>'35000',
                'estado_terreno'=>'libre'
            ],
            [
                'id_manzana'=>'1',		            //9
                'superficie_terreno'=>'100',
                'precio'=>'35000',
                'estado_terreno'=>'libre'
            ],
        
            [
                'id_manzana'=>'1',
                'superficie_terreno'=>'100',        //10
                'precio'=>'35000',
                'estado_terreno'=>'libre'
            ],
            [
                'id_manzana'=>'1',
                'superficie_terreno'=>'100',        //11
                'precio'=>'55000',
                'estado_terreno'=>'libre'
            ],
            [
                'id_manzana'=>'1',
                'superficie_terreno'=>'100',        //12
                'precio'=>'35000',
                'estado_terreno'=>'libre'
            ],
            [
                'id_manzana'=>'1',		
                'superficie_terreno'=>'100',        //13
                'precio'=>'35000',
                'estado_terreno'=>'libre'
            ],
            [
                'id_manzana'=>'1',
                'superficie_terreno'=>'150',        //14
                'precio'=>'40000',
                'estado_terreno'=>'libre'
            ],
            [
                'id_manzana'=>'1',
                'superficie_terreno'=>'150',            //15
                'precio'=>'40000',
                'estado_terreno'=>'libre'
            ],
            
            [
                'id_manzana'=>'1',		
                'superficie_terreno'=>'150',            //16
                'precio'=>'40000',
                'estado_terreno'=>'libre'
            ],
            [
                'id_manzana'=>'1',
                'superficie_terreno'=>'150',            //17
                'precio'=>'40000',
                'estado_terreno'=>'libre'
            ],
            [
                'id_manzana'=>'1',
                'superficie_terreno'=>'150',            //18
                'precio'=>'40000',
                'estado_terreno'=>'libre'
            ],
            [
                'id_manzana'=>'1',		
                'superficie_terreno'=>'150',
                'precio'=>'40000',                      //19
                'estado_terreno'=>'libre'
            ],
            [
                'id_manzana'=>'1',
                'superficie_terreno'=>'180',
                'precio'=>'40000',                      //20
                'estado_terreno'=>'libre'
            ],
            [
                'id_manzana'=>'1',
                'superficie_terreno'=>'180',            //21
                'precio'=>'40000',
                'estado_terreno'=>'libre'
            ],
            
            [
                'id_manzana'=>'1',
                'superficie_terreno'=>'180',            //22
                'precio'=>'40000',
                'estado_terreno'=>'libre'
            ],
            [
                'id_manzana'=>'1',
                'superficie_terreno'=>'180',            //23
                'precio'=>'40000',
                'estado_terreno'=>'libre'
            ],
            [
                'id_manzana'=>'1',
                'superficie_terreno'=>'180',        //24
                'precio'=>'40000',
                'estado_terreno'=>'libre'
            ],
            [
                'id_manzana'=>'1',		
                'superficie_terreno'=>'180',     //25
                'precio'=>'40000',
                'estado_terreno'=>'libre'
            ],
            [
                'id_manzana'=>'1',		
                'superficie_terreno'=>'180',        //26
                'precio'=>'40000',
                'estado_terreno'=>'libre'
            ],
            // Manzana 2
           //grandes 4
            [
            'id_contrato'=>'5',    //terreno vendido
            'id_manzana'=>'2',              //27
            'id_users'=>'6',
            'superficie_terreno'=>'180',
            'precio'=>'45000',
            'estado_terreno'=>'ocupado'
            ],
        [
            'id_manzana'=>'2',//1
            'superficie_terreno'=>'180',            //28
            'precio'=>'45000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//2
            'superficie_terreno'=>'180',            //29
            'precio'=>'45000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//3
            'superficie_terreno'=>'180',            //30
            'precio'=>'45000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//4
            'superficie_terreno'=>'180',            //31
            'precio'=>'45000',
            'estado_terreno'=>'libre'
        ],

       //mediano 8
        [
            'id_manzana'=>'2',//1
            'superficie_terreno'=>'150',            //32
            'precio'=>'40000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//2
            'superficie_terreno'=>'150',            //33
            'precio'=>'40000',
            'estado_terreno'=>'libre'
        ],

        [
            'id_manzana'=>'2',//3                   //34
            'superficie_terreno'=>'150',
            'precio'=>'40000',
            'estado_terreno'=>'libre'
        ],

        [
            'id_manzana'=>'2',//4
            'superficie_terreno'=>'150',            //35
            'precio'=>'40000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//5
            'superficie_terreno'=>'150',            //36
            'precio'=>'40000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//6
            'superficie_terreno'=>'150',            //37
            'precio'=>'40000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//7
            'superficie_terreno'=>'150',            //38
            'precio'=>'40000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//8                   //39
            'superficie_terreno'=>'150',
            'precio'=>'40000',
            'estado_terreno'=>'libre'
        ],
       //chicos 7

        [
            'id_contrato'=>'2',          //terreno vendido          //40
            'id_manzana'=>'2', 
            'id_users'=>'3',
            'superficie_terreno'=>'100',
            'precio'=>'25000'    ,     //precio super oferta
            'estado_terreno'=>'ocupado'             
         ],
        [
            'id_manzana'=>'2',//1
            'superficie_terreno'=>'100',            //41
            'precio'=>'35000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//2
            'superficie_terreno'=>'100',            //42
            'precio'=>'35000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//3
            'superficie_terreno'=>'100',        //43
            'precio'=>'35000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//4
            'superficie_terreno'=>'100',            //44
            'precio'=>'35000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//5
            'superficie_terreno'=>'100',            //45
            'precio'=>'35000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//6
            'superficie_terreno'=>'100',            //46
            'precio'=>'35000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//7
            'superficie_terreno'=>'100',
            'precio'=>'35000',                      //47
            'estado_terreno'=>'libre'
        ],
         //pequeños

         [
            'id_contrato'=>'3',    //terreno vendido
            'id_manzana'=>'3',
            'id_users'=>'4',                        //48
            'superficie_terreno'=>'100',
            'precio'=>'30000',
            'estado_terreno'=>'ocupado'
        ],
         [
            'id_manzana'=>'3',
            'superficie_terreno'=>'100',            //49
            'precio'=>'35000',
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',                  //50
            'superficie_terreno'=>'100',
            'precio'=>'35000',
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'100',        //51
            'precio'=>'35000',
            'estado_terreno'=>'libre'
        
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'100',        //52
            'precio'=>'35000',
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'100',        //53
            'precio'=>'35000',
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'100',
            'precio'=>'35000',                  //54
            'estado_terreno'=>'libre'
        
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'100',        //55
            'precio'=>'35000',
            'estado_terreno'=>'libre'
        
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'100',        //56
            'precio'=>'35000',
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'100',        //57
            'precio'=>'35000',
            'estado_terreno'=>'libre'
        
        ],
        [
            'id_manzana'=>'3',              //58
            'superficie_terreno'=>'100',
            'precio'=>'35000',
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'100',        //59
            'precio'=>'35000',
            'estado_terreno'=>'libre'
            
        ],
        
        // Medianos
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'150',            //60
            'precio'=>'40000',
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'150',
            'precio'=>'40000',              //61
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'150',        //62
            'precio'=>'40000',
            'estado_terreno'=>'libre'
        
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'150',        //63
            'precio'=>'40000',
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'150',
            'precio'=>'40000',                      //64
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'150',            //65
            'precio'=>'40000',
            'estado_terreno'=>'libre'
        
        ],
        [
            'id_manzana'=>'3',              //66
            'superficie_terreno'=>'150',
            'precio'=>'40000',
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'150',
            'precio'=>'40000',                  //67
            'estado_terreno'=>'libre'
            
        ],
        //Grandes
        [
            'id_contrato'=>'6', //terreno vendido
            'id_manzana'=>'3',
            'id_users'=>'7',                    //68
            'superficie_terreno'=>'180',
            'precio'=>'42750',
            'estado_terreno'=>'ocupado'
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'180',
            'precio'=>'45000',
            'estado_terreno'=>'libre'               //69
        
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'180',
            'precio'=>'45000',              //70
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',                  //71
            'superficie_terreno'=>'180',
            'precio'=>'45000',
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'180',        //72
            'precio'=>'45000',
            'estado_terreno'=>'libre'
        
        ]

        ]);
        
    }
}
