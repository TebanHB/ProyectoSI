<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'nota';
    protected $fillable =[
        'descripcion',
        'Fecha'
    ];
    use HasFactory;
    public function bitacora(){
        return $this->belongsTo(Bitacora::class,'id_bitacora');
    }
}
