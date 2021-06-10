<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terreno extends Model
{

    protected $table = 'terreno';

    protected $fillable =[
        'superficie_terreno',
        'precio',
        'estado_terreno'
    ];
    use HasFactory;
    public function contrato(){
        return $this->belongsTo(Contrato::class,'id_contrato');
    }
    public function manzana(){
        return $this->belongsTo(Manzana::class,'id_manzana');
    }
    public function users(){
        return $this->belongsTo(Users::class,'id_users');
    }
    public function vende(){
        return $this->hasOne(Vende::class,'id_lote');
    }
}
