<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Request handling 
     * 
     * @param \Closure(\Illuminate\Http\Request):(Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next):Response
    {
        //login sesuai role dapat akses
        //tidak sesuai role kembali ke homepage
        $roles = array_slice(func_get_args(), 2);

        foreach ($roles as $role)
        {
            $user = Auth::user()->role;
            if ($user == $role){
                return $next($request);
            }
        }

        return redirect('/');
    }
}