<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pago';

    protected $fillable =[
        'tipo',
        'cuota_inicial',
        'plazo',
        'interes_anual',
        'cuota_mensual',
        'fecha_Prog',
        'fecha_inicio',
        'fecha_ultima_cuota',
        'estado',
        'saldo_financiado',
        'monto_pagado',
        'monto_a_pagar',
        'fecha_pago_garantia',
        'fecha_a_pagar',
        'monto',
        'descuento',
        'fecha_de_pago'
    ];
    use HasFactory;
    public function contrato(){
        return $this->hasOne(Contrato::class,'codigo_pago');
    }
  
    public function cuota(){

        return $this->hasmany('App\Models\Cuota');
    }

}
