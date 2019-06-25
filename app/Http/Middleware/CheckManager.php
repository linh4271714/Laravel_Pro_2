<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckManager
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
        if(Session::has('ID_manager')){
            return $next($request);
        }
        return redirect()->route('mng_login')->with('error','Mời bạn đăng nhập!');
    }
}
