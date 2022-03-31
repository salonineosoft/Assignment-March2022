<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = session('user');
        if($user->role_id=='2'){
            return $next($request);
           
        }
        else{
            return redirect("dashboardStaffMain");;
        }
       
    }

}

// f(auth()->user()->is_admin==1){
//     return $next($request);
//     }
