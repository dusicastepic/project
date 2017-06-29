<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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

 if (Auth::check()){                 #check if the user is loged in
  if (Auth::user()->isAdmin()){   #check if he is admin

     return $next($request);  #it's ok and go process other and next requests
           }
       }
       return redirect('/');

}
}
