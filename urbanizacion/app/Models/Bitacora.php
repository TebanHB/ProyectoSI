<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    protected $table = 'bitacora';
    protected $fillable =[];
    use HasFactory;
    public function nota(){
        return $this->hasMany(Nota::class,'id_bitacora');
    }
    public function users(){
        return $this->belongsTo(Users::class,'id_user');
    }
}
