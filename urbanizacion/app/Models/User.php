<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'tipo_vendedor',
        'tipo_visita',
        'tipo_cliente',
        'tipo_administrador',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function contrato(){
        return $this->hasMany(Contrato::class,'id_user');
    }
    public function telefono_persona(){
        return $this->hasMany(Telefono_persona::class,'id_users');
    }
    public function terreno(){
        return $this->hasMany(Terreno::class,'id_users');
    }

    public function vende(){
        return $this->hasMany(Vende::class,'id_user');
    }
    public function bitacora(){
        return $this->hasOne(Bitacora::class,'id_user');
    }

    public function reserva(){
        return $this->hasMany(Reserva::class,'id_user');
    }
    public function rango(){
        if($this->tipo_administrador==1)
            return "Admin";
        elseif($this->tipo_vendedor==1)
            return "Vendedor";
        elseif($this->tipo_cliente==1)
            return "Cliente";
        else
            return "Visita";

    }
}
