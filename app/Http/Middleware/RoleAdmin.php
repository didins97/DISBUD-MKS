<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // return $next($request);
        if (Auth::check()) {
            if ($role == 'allAdmin'){
                if(Auth::user()->role == 'superAdmin' || Auth::user()->role == 'adminParasanganta' || Auth::user()->role == 'adminLabu'){
                    return $next($request);
                }
            } elseif($role == 'adminParasanganta&superAdmin'){
                if(Auth::user()->role == 'superAdmin' || Auth::user()->role == 'adminParasanganta'){
                    return $next($request);
                }
            } elseif($role == 'adminLabu&superAdmin'){
                if(Auth::user()->role == 'superAdmin' || Auth::user()->role == 'adminLabu'){
                    return $next($request);
                }
            } else if($role == 'superAdmin' && Auth::user()->role == 'superAdmin'){
                return $next($request);
            }

            return redirect()->back();
        }

        return redirect()->route('login');
    }
}
