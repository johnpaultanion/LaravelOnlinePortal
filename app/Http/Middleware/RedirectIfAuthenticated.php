<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
  
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if(Auth::user()->role == 'student'){
                    if ($request->is('admin/*') || $request->is('core/*')) {
                        return redirect('/');
                    }
                }

                if(Auth::user()->role == 'teacher'){
                    if ($request->is('core/*')) {
                        return redirect('/admin/dashboard');
                    }
                }
            }
        }

        return $next($request);
    }
}
