<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class check_Cookie
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
        $value = $request->cookie('user');
        if($value != null)
            return $next($request);
        
        else return redirect('login');

        
    }
}
