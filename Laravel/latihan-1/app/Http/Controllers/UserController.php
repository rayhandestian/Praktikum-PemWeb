<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Menampilkan form Signin.
     */
    public function showSigninForm()
    {
        return view('signin');
    }

    /**
     * Menangani proses Signin.
     */
    public function signin(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Ambil data dari session (misalnya, data pengguna yang terdaftar)
        $user = session()->get('user');

        // Cek apakah user ada dan password sesuai
        if ($user && $user['email'] === $request->email && $user['password'] === $request->password) {
            // Tandai user sebagai login
            session()->put('user.is_login', true);

            return redirect('/profile')->with('success', 'Anda berhasil login!');
        }

        // Jika gagal, kembali ke form signin dengan pesan error
        return redirect()->route('login')->with('error', 'Email atau password salah.');
    }

    /**
     * Menampilkan form Signup.
     */
    public function showSignupForm()
    {
        return view('signup');
    }

    /**
     * Menangani proses Signup.
     */
    public function signup(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Ambil semua data request
        $data = $request->all();

        // Simpan data user ke dalam session
        session()->put('user', [
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password'], // Catatan: Password sebaiknya dienkripsi
            'is_login' => false,
        ]);

        // Redirect ke halaman signin dengan pesan sukses
        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    /**
     * Menangani proses Logout.
     */
    public function logout()
    {
        // Hapus data user dari session
        session()->forget('user');

        return redirect()->route('login')->with('success', 'Anda telah logout.');
    }

    /**
     * Menampilkan halaman Profile.
     */
    public function profile()
    {
        $user = session()->get('user');

        // Pastikan user ada dan sudah login
        if (!$user || !isset($user['is_login']) || !$user['is_login']) {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu');
        }

        return view('profile', compact('user'));
    }
}
