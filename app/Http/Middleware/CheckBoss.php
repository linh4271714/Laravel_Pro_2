<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckBoss
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
        if(Session::has('userName')){
            return $next($request);
        }
        return redirect()->route('boss_login')->with('error','Mời bạn đăng nhập!');
    }
}
