<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class telefono extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
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
    }
}
