<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;

class IsAdmin
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
        if(auth()->user()->is_admin == 1){
            return $next($request);
        }
        echo "no cannot here";
        return redirect()->back()->with('message', 'no cannot do that here');
        //return redirect::back()->withErrors(['message','no cannot do that here']);
        // redirect('/userlogin')->with('error','You have no admin access');
    }
}
