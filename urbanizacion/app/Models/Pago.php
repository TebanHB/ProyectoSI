<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $table = 'pago';

    protected $fillable =[
        'tipo'
    ];
    use HasFactory;
    public function contrato(){
        return $this->hasOne(Contrato::class,'pago_id');
    }
    public function credito(){
        return $this->hasMany(Credito::class,'pago_id');
    }
    public function contado(){
        return $this->hasMany(Contado::class,'pago_id');
    }
    public function compromiso(){
        return $this->hasMany(Compromiso::class,'pago_id');
    }
}
