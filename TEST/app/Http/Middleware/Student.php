<?php

namespace App\Http\Middleware;

use Closure;

class Student
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
        dd('nk');
        if(auth()->user()->student == 2){
            return $next($request);
        }
   
        return redirect('student')->with(‘error’,"You don't have student access.");

        // return $next($request);
    }
}
