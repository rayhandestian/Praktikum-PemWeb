<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Ambil data user dari session
        $user = $request->session()->get('user');

        // Periksa apakah user sudah login
        if (!isset($user['is_login']) || !$user['is_login']) {
            // Belum login, arahkan ke halaman signin dengan pesan error
            return redirect('/signin')->with('error', 'Anda harus login terlebih dahulu');
        }

        // Sudah login, lanjutkan ke request berikutnya
        return $next($request);
    }
}
