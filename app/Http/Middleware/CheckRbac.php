<?php

namespace App\Http\Middleware;

use Closure;
use Route;
use Auth;

class CheckRbac
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::guard('superadmin') -> user() -> role_id != '1'){

            $route = Route::currentRouteAction();

            $ac = Auth::guard('superadmin') -> user() -> role -> auth_ac;
            $ac = strtolower($ac . ',indexcontroller@index');

            $routeArr = explode('\\', $route);
            if(strpos($ac,strtolower(end($routeArr))) === false){
                exit("<h1>You do not have permission to access this interface！</h1>");
            }
        }
        return $next($request);
    }
}
