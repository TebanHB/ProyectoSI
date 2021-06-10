<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuota extends Model
{
    
    protected $table = 'cuota';
    protected $fillable =[
        'amortizacion',
        'monto_cuota'
    ];
    use HasFactory;
    public function credito(){
        return $this->belongsTo(Credito::class,'id_credito');
    }
    public function mora(){
        return $this->belongsTo(Mora::class,'id_mora');
    }
}
