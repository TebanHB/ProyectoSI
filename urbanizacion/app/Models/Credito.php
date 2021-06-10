<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
    protected $table = 'credito';

    protected $fillable =[
        'cuota_inicial',
        'plazo',
        'interes_anual',
        'cuota_mensual',
        'fecha_prog',
        'fecha_inicio',
        'fecha_ultima_cuota',
        'estado',
        'saldo_financiado'
    ];
    use HasFactory;
    public function pago(){
        return $this->belongsTo(Pago::class,'pago_id');
    }
    public function cuota(){
        return $this->hasMany(Cuota::class,'id_credito');
    }
}
