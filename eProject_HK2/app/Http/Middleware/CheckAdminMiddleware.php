<?php

namespace App\Http\Middleware;

use Closure;
use App\user;

class CheckAdminMiddleware
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
        if($request->session()->has('user')){
            $user = $request->session()->get('user');
            // $a = $user->TYPE;
            // dd($a);
            if($user->TYPE == 1){
               
                return $next($request);
            }
            elseif($user->TYPE == 0){
                return redirect('supervisor/member/home');
            }
            else {
                return redirect('index');
            }
        }
        else {
            return redirect('login');
        }
    }
}
