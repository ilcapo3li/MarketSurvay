<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Authen
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
      //  $name=Auth::user()->name;
      
      if ($request->session()->has('key')) {
        //
        $request->session()->regenerate();
        return $next($request);
    }
    return redirect()->route('login');

        // if (Auth::check()) {
        //     return redirect()->route('login');
        // }
    //     if (Auth::check()) {
    //         // The user is logged in...
    //       //  return view('admin.dashboard');
    // }
        //return route('login');
        // $request->session()->regenerate();
        // return $next($request);
        
    }
}
