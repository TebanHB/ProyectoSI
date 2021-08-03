<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelefonoPersona extends Model
{
    protected $table = 'telefono_persona';
    protected $fillable =[
        'telefono',
        'id_users'
    ];
    use HasFactory;
    public function users(){
        return $this->belongsTo(Users::class,'id_users');
    }
}
