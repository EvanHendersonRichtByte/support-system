<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class AdminAuthenticate
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
        if(!Session::get('logged_in')){
            return redirect('/login');
        } else {
            if(Session::get('role')->name == 'User') {
                return redirect('/client/panel/dashboard');
            }
        }
        return $next($request);
    }
}
