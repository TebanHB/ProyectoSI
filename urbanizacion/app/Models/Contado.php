<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contado extends Model
{
    protected $table = 'contado';
    protected $fillable =[
        'monto',
        'descuento',
        'fecha_de_pago'
    ];
    use HasFactory;
    public function pago(){
        return $this->belongsTo(Pago::class,'pago_id');
    }
}
