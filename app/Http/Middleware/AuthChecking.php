<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;
use App\Models\User ;

class AuthChecking
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
        // return $next($request);
        if(Auth::user()->usertype == 'admin') {
            return $next($request);   //Admin 
        }
        elseif(Auth::user()->usertype == 'supervisor') {
            return redirect('supervisordashboard') ;   //supervisor dashboard
        }
        elseif(Auth::user()->usertype == 'teamleader') {
            return redirect('teamleaderdashboard') ;  //teamleader
        }
        elseif(Auth::user()->usertype == 'employee') {
            return redirect('employeedashboard') ;  //employee
        }
        elseif(Auth::user()->usertype == 'user') {
            return redirect('userdashboard') ;  //user
        }
        else {
            return redirect("login") ; //change the routing after registation here in future 
        }
    }
}
