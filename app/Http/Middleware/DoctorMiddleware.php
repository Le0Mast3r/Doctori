<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Redirect;
class DoctorMiddleware
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
        if (Auth::guard('doctor')->check()) {
        return $next($request);
            
        }
        return redirect('/identifier-docteur');
    
    } 
    
}
