<?php

namespace App\Http\Middleware;

use Closure;

class RolePermission
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
     if(\Auth::check()){

            if (in_array(\Route::getCurrentRoute()->getName(), json_decode(\Auth::user()->accessuser->route_access_list)->routelist))
                {
                    return $next($request);
                } else {
                    return redirect('home');
                }
        }

        return $next($request);
    }
}
