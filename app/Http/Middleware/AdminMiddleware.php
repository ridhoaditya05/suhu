<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna terautentikasi dan adalah admin
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // Izinkan akses
        }

        // Jika bukan admin, redirect atau beri respon lain
        return redirect()->route('login')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }
}
