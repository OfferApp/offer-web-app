<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthenticateVendor
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
        //If request does not comes from logged in vendor
        //then he shall be redirected to Vendor Login page
        if (Auth::guard('web_vendor')->check() && Auth::guard('web_vendor')->user()->role_id == 1) {
          return $next($request);
        }
        return redirect('/vendor_login');

    }
}
