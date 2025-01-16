<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Termwind\Components\Dd;

class gantipasswordController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('gantipassword', compact('gantipassword'));
    }
    
    public function update(Request $request)
{
    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|confirmed|min:8',
    ]);

    $user = Auth::user();

    // Periksa apakah password lama benar
    if (!Hash::check($request->current_password, $user->password)) {
        return back()->withErrors(['current_password' => 'Password lama salah']);
    }

    // Update password
    $user->password = Hash::make($request->new_password);
    
    // Simpan perubahan
    dd($user)->save();

    return redirect()->route('profile')->with('success', 'Password berhasil diubah');
}
    
}
