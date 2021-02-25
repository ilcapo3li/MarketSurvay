<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Loged
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
      
      
      if ($request->session()->has('key')) {
        //
        $request->session()->regenerate();
        return redirect()->route('admin.dashboard');
      
    }
    return $next($request);

       
    }
}
