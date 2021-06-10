<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compromiso extends Model
{
    protected $table = 'compromiso';
    protected $fillable =[
        'monto_pagado',
        'monto_a_pagar',
        'fecha_pago_garantia',
        'fecha_a_pagar'
    ];
    use HasFactory;
    public function pago(){
        return $this->belongsTo(Pago::class,'pago_id');
    }
}
