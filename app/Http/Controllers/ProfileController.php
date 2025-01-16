<?php

namespace App\Http\Controllers;

use app\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{

    public function index()
    {
        $users = DB::table('users')->get();
       
        $users = users::all(); 
        return view('auth.edit_profile', compact('users')); 
    }
    public function edit()
    {
        $user = Auth::user(); 
        return view('auth.edit_profile', compact('user'));
    }

    public function update(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
        'profile_images' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    dd($validated);
    

    $user = Auth::user();

    if (!$user) {
        return redirect()->route('login')->with('error', 'Pengguna tidak terautentikasi.');
    }

    $user->name = $request->name;
    $user->email = $request->email;
    $user->profile_images = $request->profile_images;

    // Tangani unggahan gambar profil
    if ($request->hasFile('profile_images')) {
        // Hapus gambar lama jika ada
        if ($user->profile_images) {
            Storage::delete($user->profile_images);
        }
        // Simpan gambar baru
        $path = $request->file('profile_images')->store('image/profiles');
        $user->profile_images = $path;
    }

    try {
        $user->save();
        return redirect()->route('dashboard')->with('success', 'Profil berhasil diperbarui.');
    } catch (\Exception $e) {
        dd($e->getMessage()); // Tampilkan pesan kesalahan
    }
}
}