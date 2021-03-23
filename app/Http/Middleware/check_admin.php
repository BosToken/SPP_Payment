<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class check_admin
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
            if(Session::get('user')->level == null) {
                return redirect('/siswa/dashboard');
            }
            else if(Session::get('user')->level == "2") {
                return redirect('/petugas/dashboard');
            }
        }
        return $next($request);
    }
}
