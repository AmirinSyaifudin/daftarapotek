<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,...$roles) // artinya untuk banyak role 
    {
        if(in_array($request->user()->role,$roles)){ // buat percabangan, apakah yang me request user yang login sama dengan role di parameter
             // kalo sama memiliki role sesuai di paramater aplikasi boleh di lanjutnya 
            return $next($request);
        }
        // kalo gak ada, kalo role tisak sesuai kama aplikasi akan ke redirect ke Route
           return redirect('/');
    }
}
