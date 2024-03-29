<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reserva';
    protected $fillable =[
        'horario_de_visita',
        'id_user',
        'id_lote'
    ];
    use HasFactory;
    public function terreno(){
        return $this->belongsTo(Terreno::class,'id_lote');
    }
    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }
}
