<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terreno extends Model
{

    use HasFactory;
    public function contrato(){
        return $this->belongsTo(Terreno::class,'contrato_id');
    }
}
