<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    //Se pone la tabla de la bdd
    // Protected Tabla = 'Nombre de la tabla';
    protected $table = 'contrato';
    //Los datos que se van a mostrar
    protected $fillable =['fecha_adjudicacion','monto'];
    //Los datos ocutlos y/o protegidos
    //   protected $hidden = [];
    use HasFactory;
    public function cliente(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function pago(){
        return $this->belongsTo(Pago::class,'pago_id');
    }
    public function terreno(){
        return $this->hasOne(Terreno::class,'contrato_id');
    }
}
