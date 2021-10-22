<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
class AdminMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
         if (!Auth::user()->level !== 'admin') 
         {
             abort(403, 'Unauthorized action.');
        }
        else
        {
            return redirect('home');
        }


        return $next($request);
    }
}
