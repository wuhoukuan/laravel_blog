<?php

namespace App\Http\Middleware;

use Closure;

class authlogin
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

        if(!session("user_name")){

            return redirect("admin.login");
            
            
        }
        
        
        
        return $next($request);
    }
}
