<?php
namespace App\Http\Controllers\Nota;
use Carbon\Carbon;

class NotaUsuario

{
use App\Models\User;
use App\Models\Nota;
use App\Models\Bitacora;

public static function crear(User $user,$texto){

    $bitacoras = Bitacora::where('id_user',$user->id)->get();
    foreach ($bitacoras as $bitacora){
        $id_bitacora=$bitacora->id;
    }
    Nota::create([
        'Fecha'=>Carbon::now(),
        'descripcion'=>$texto,
        'id_bitacora'=>$id_bitacora,

    ]);

}
}
