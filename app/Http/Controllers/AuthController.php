<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // =========================
    // Tampilkan halaman login
    // =========================
    public function showLogin()
    {
        return view('auth.login');
    }

    // =========================
    // Proses login
    // =========================
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Proses login
        if (Auth::attempt($credentials)) {
            // Regenerasi session untuk keamanan
            $request->session()->regenerate();

            // Redirect ke halaman yang dimaksud setelah login (dashboard)
            return redirect()->intended('/dashboard');
        }

        // Jika login gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // =========================
    // Proses logout
    // =========================
    public function logout(Request $request)
    {
        // Logout user
        Auth::logout();

        // Hapus session dan token CSRF
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login setelah logout
        return redirect('/login');
    }

    // =========================
    // Tampilkan halaman register
    // =========================
    public function showRegister()
    {
        return view('auth.register');
    }

    // =========================
    // Proses register
    // =========================
    public function register(Request $request)
    {
        // Validasi data register
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6', 'confirmed'],
        ]);

        // Buat user baru
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Login otomatis setelah register
        Auth::login($user);

        // Redirect ke dashboard setelah register dan login
        return redirect('/dashboard');
    }
}
