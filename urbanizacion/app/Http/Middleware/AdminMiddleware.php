<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /*
     * $this->registerPolicies();
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


        $usuario = Permission::where('role_id',1)->where('user_id',Auth::user()->id)->where('status',1)->get();
        if(sizeof($usuario)!=0) // if it's not empty
         return $next($request);
         return redirect()->back();
     */

    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->tipo_administrador==1){
            return $next($request);
        }

        return redirect()->route('home');
    }
}
