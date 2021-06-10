<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vende extends Model
{
    protected $table = 'vende';
    protected $fillable =[
        'comision'
    ];
    use HasFactory;
    public function terreno(){
        return $this->belongsTo(Terreno::class,'id_lote');
    }
    public function users(){
        return $this->belongsTo(Users::class,'id_user');
    }
}
