<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //vendedor
        //visita
        //administrador
        //cliente
        Gate::define('admin', function($user){         
            $usuario = DB::table('users')->where('id',$user->id)->where('tipo_administrador',1)->get(); 
            return ( sizeof($usuario) != 0);
        });
        Gate::define('cliente', function($user){         
            $usuario = DB::table('users')->where('id',$user->id)->where('tipo_cliente',1)->get(); 
            return ( sizeof($usuario) != 0);
        });
        Gate::define('visita', function($user){         
            $usuario = DB::table('users')->where('id',$user->id)->where('tipo_visita',1)->get(); 
            return ( sizeof($usuario) != 0);
        });
        Gate::define('vendedor', function($user){         
            $usuario = DB::table('users')->where('id',$user->id)->where('tipo_vendedor',1)->get(); 
            return ( sizeof($usuario) != 0);
        });
    }
}
