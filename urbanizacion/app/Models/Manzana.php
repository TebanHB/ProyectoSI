<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manzana extends Model
{
    protected $table = 'manzana';

    protected $fillable =[
        'superficie_manzana',
        'cantidad_de_terreno',
        'ubicacion'
    ];
    use HasFactory;
    public function terreno(){
        return $this->hasMany(Terreno::class,'id_manzana');
    }
}
