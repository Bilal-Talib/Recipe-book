<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->is_admin == 1){
            return $next($request);
        }

    // elseif(auth()->user()->is_admin == 2){
    //     return redirect(‘normal.home’)->with(‘error’,"You don't have admin access.");
    // } 
   
        return redirect('home')->with('error',"You don't have admin access.");
    }
}
