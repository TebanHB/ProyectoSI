<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mora extends Model
{
        
    protected $table = 'mora';
    protected $fillable =[
        'multa',
        'retraso_dia'
    ];
    use HasFactory;
    public function cuota(){
        return $this->hasOne(Cuota::class,'id_mora');
    }
}
