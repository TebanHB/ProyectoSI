<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
    protected $table='cuota';
    protected $fillable=['id_credito','id_mora','amortizacion','monto_cuota'];
    use HasFactory;
    public function credito(){
        return $this->belongsTo('App\Models\Pago');

    }

}
