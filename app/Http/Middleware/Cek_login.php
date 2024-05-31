<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Check_login
{
    public function handle(Request $request, Closure $next, $roles): Response
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $user = Auth::user();

        if ($user->roles == $roles) {
            return $next($request);
        }

        return redirect('login')->with('error', 'Maaf anda tidak memiliki akses!');


        // echo $roles;
    }
}
