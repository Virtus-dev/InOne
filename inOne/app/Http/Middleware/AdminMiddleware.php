<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

//Middleware encargado de chequear si es superadmin para darle acceso a los users
class AdminMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        //Si es super admin permite continuar hacia 'users'
        if (auth()->check() && auth()->user()->role =='super_admin')
            return $next($request);
        //Si no lo es redirige a contacts
        return redirect('/contacts');
    }
}
