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
            [
                'id_manzana'=>'1',		
                'superficie_terreno'=>'180',        //27
                'precio'=>'40000',
                'estado_terreno'=>'libre'
            ],
            // Manzana 2
           //grandes 4
        [
            'id_contrato'=>'5',    //terreno vendido
            'id_manzana'=>'2',              //28
            'id_users'=>'6',
            'superficie_terreno'=>'180',
            'precio'=>'45000',
            'estado_terreno'=>'ocupado'
        ],
        [
            'id_manzana'=>'2',//1
            'superficie_terreno'=>'180',            //29
            'precio'=>'45000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//2
            'superficie_terreno'=>'180',            //30
            'precio'=>'45000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//3
            'superficie_terreno'=>'180',            //31
            'precio'=>'45000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//4
            'superficie_terreno'=>'180',            //32
            'precio'=>'45000',
            'estado_terreno'=>'libre'
        ],

       //mediano 8
        [
            'id_manzana'=>'2',//1
            'superficie_terreno'=>'150',            //33
            'precio'=>'40000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//2
            'superficie_terreno'=>'150',            //34
            'precio'=>'40000',
            'estado_terreno'=>'libre'
        ],

        [
            'id_manzana'=>'2',//3                   //35
            'superficie_terreno'=>'150',
            'precio'=>'40000',
            'estado_terreno'=>'libre'
        ],

        [
            'id_manzana'=>'2',//4
            'superficie_terreno'=>'150',            //36
            'precio'=>'40000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//5
            'superficie_terreno'=>'150',            //37
            'precio'=>'40000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//6
            'superficie_terreno'=>'150',            //38
            'precio'=>'40000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//7
            'superficie_terreno'=>'150',            //39
            'precio'=>'40000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//8                   //40
            'superficie_terreno'=>'150',
            'precio'=>'40000',
            'estado_terreno'=>'libre'
        ],
       //chicos 7

        [
            'id_contrato'=>'2',          //terreno vendido          //41
            'id_manzana'=>'2', 
            'id_users'=>'3',
            'superficie_terreno'=>'100',
            'precio'=>'25000'    ,     //precio super oferta
            'estado_terreno'=>'ocupado'             
         ],
        [
            'id_manzana'=>'2',//1
            'superficie_terreno'=>'100',            //42
            'precio'=>'35000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//2
            'superficie_terreno'=>'100',            //43
            'precio'=>'35000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//3
            'superficie_terreno'=>'100',        //44
            'precio'=>'35000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//4
            'superficie_terreno'=>'100',            //45
            'precio'=>'35000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//5
            'superficie_terreno'=>'100',            //46
            'precio'=>'35000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//6
            'superficie_terreno'=>'100',            //47
            'precio'=>'35000',
            'estado_terreno'=>'libre'
        ],
        [
            'id_manzana'=>'2',//7
            'superficie_terreno'=>'100',
            'precio'=>'35000',                      //48
            'estado_terreno'=>'libre'
        ],
         //pequeños

         [
            'id_contrato'=>'3',    //terreno vendido
            'id_manzana'=>'3',
            'id_users'=>'4',                        //49
            'superficie_terreno'=>'100',
            'precio'=>'30000',
            'estado_terreno'=>'ocupado'
        ],
         [
            'id_manzana'=>'3',
            'superficie_terreno'=>'100',            //50
            'precio'=>'35000',
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',                  //51
            'superficie_terreno'=>'100',
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
            'superficie_terreno'=>'100',        //54
            'precio'=>'35000',
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'100',
            'precio'=>'35000',                  //55
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
            'id_manzana'=>'3',
            'superficie_terreno'=>'100',        //58
            'precio'=>'35000',
            'estado_terreno'=>'libre'
        
        ],
        [
            'id_manzana'=>'3',              //59
            'superficie_terreno'=>'100',
            'precio'=>'35000',
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'100',        //60
            'precio'=>'35000',
            'estado_terreno'=>'libre'
            
        ],
        
        // Medianos
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'150',            //61
            'precio'=>'40000',
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'150',
            'precio'=>'40000',              //62
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
            'superficie_terreno'=>'150',        //64
            'precio'=>'40000',
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'150',
            'precio'=>'40000',                      //65
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'150',            //66
            'precio'=>'40000',
            'estado_terreno'=>'libre'
        
        ],
        [
            'id_manzana'=>'3',              //67
            'superficie_terreno'=>'150',
            'precio'=>'40000',
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'150',
            'precio'=>'40000',                  //68
            'estado_terreno'=>'libre'
            
        ],
        //Grandes
        [
            'id_contrato'=>'6', //terreno vendido
            'id_manzana'=>'3',
            'id_users'=>'7',                    //69
            'superficie_terreno'=>'180',
            'precio'=>'42750',
            'estado_terreno'=>'ocupado'
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'180',
            'precio'=>'45000',
            'estado_terreno'=>'libre'               //70
        
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'180',
            'precio'=>'45000',              //71
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',                  //72
            'superficie_terreno'=>'180',
            'precio'=>'45000',
            'estado_terreno'=>'libre'
            
        ],
        [
            'id_manzana'=>'3',
            'superficie_terreno'=>'180',        //73
            'precio'=>'45000',
            'estado_terreno'=>'libre'
        
        ],
        //ocupados

        
        
       
       
        
       
       
        

        ]);
        
    }
}
