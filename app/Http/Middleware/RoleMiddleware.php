<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RoleMiddleware
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
        if(Auth::user()->role_id==2){
            return $next($request);
        }elseif(Auth::user()->role_id==1){
            if($request->path()=='route-1'){
                abort(403);
            } else {
                return $next($request);
            };
        }elseif(Auth::user()->role_id==0){
            if($request->path()=='route-3'){
                return $next($request);
            } else {
                abort(403);
            }
        };
    }
}
