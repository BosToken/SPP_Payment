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
        $response = $next($request);
        return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')
            ->header('Pragma','no-cache')
            ->header('Expires','Fri, 01 Jan 1990 00:00:00 GMT');
    }
}
