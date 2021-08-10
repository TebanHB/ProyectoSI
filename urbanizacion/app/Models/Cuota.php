<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
    protected $table='cuota';
    protected $fillable=['id_credito','id_mora','amortizacion','monto_cuota','fecha_pagada','fecha_programada'];
    use HasFactory;
    public function pago(){
        return $this->belongsTo(Pago::class,'id_credito');

    }
    public function mora(){
        return $this->belongsTo(Mora::class,'id_mora');

    }

}
