<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\program;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/dashboard');
    }

    return redirect()->back()->withErrors([
]);
}
public function register(Request $request)
{
    // Validasi
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6|confirmed', // Mengubah minimal menjadi 6 karakter
    ]);

    // Siapkan data
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password), // Hash password
    ];

    // Buat pengguna baru
    try {
        User::create($data);
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => 'Gagal menyimpan pengguna: ' . $e->getMessage()]);
    }

    return redirect('/login')->with('success', 'Registrasi berhasil!');
}

}
   

