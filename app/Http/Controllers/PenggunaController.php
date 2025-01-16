<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PenggunaController extends Controller
{
    public function index()
{
    $users = DB::table('users')->get();
    $user = Auth::user();
    return view('Pengguna', [
        "users" => $users,
        'user' => $user
    ]);
}

public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'profile_images' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;

        // Handle the image upload
        if ($request->hasFile('profile_images')) {
            // Store the old image if needed
            if ($user->profile_images) {
                Storage::delete($user->profile_images);
            }

            $path = $request->file('profile_images')->store('images/profiles');
            $user->profile_images = $path;
        }
        
        // Simpan perubahan ke database
        $user->save();

        return redirect()->route('dashboard')->with('success', 'Profile updated successfully.');
    }

}
