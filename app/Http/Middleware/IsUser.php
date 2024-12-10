<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsUser
{
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check() && Auth::user()->role == 'user'){
            return $next($request);
        }
            return redirect()->route('index')->with('delete', 'Ushbu sahifaga kirish uchun sizda ruxsat yo`q!');
    }
}
