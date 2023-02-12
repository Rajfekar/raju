<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Qrguard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('qrcode7697477107')){
            return $next($request);

        }
        else{
            return redirect('/rit/login')->with('fail','access rejected you have to login first');
        }
    }
}
