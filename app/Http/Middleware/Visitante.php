<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Visitante
{

    public function handle($request, Closure $next)
    {
        if(Auth::guest()){
            return $next($request);
        }else{
          return redirect('home');
        }
    }
}
