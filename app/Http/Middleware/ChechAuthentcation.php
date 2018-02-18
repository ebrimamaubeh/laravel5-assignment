<?php

namespace App\Http\Middleware;

use Closure;

class ChechAuthentcation
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
        // check that user is authenticated. 
        if(!Auth::check()){
            return redirect('login');
        }

        return $next($request);
    }
}
