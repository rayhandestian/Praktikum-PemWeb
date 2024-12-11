<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next)
    {
        $user = session()->get('user');

        if (!isset($user['is_login']) || !$user['is_login']) {
            // Redirect ke route 'login' jika belum login
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu');
        }

        return $next($request);
    }
}
