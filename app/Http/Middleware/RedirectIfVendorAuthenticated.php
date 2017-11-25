<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RedirectIfVendorAuthenticated
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
       //If request comes from logged in customer, he will
       //be redirect to home page.

       if (Auth::guard()->check() && Auth::guard()->user()->role_id == 2 ) {
           return redirect('/customer_home');
       }

       //If request comes from logged in vendor, he will
       //be redirected to vendor's home page.
       if (Auth::guard('web_vendor')->check() && Auth::guard('web_vendor')->user()->role_id == 1 ) {
           return redirect('/');
       }
       return $next($request);
   }
}
