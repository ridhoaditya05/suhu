<?php

namespace App\Http\Controllers;

use App\Models\sertifikats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SertifikatController extends Controller
{
    
    public function index()
    {
        $sertifikats = DB::table('sertifikats')->get();


        $user = Auth::user();

        return view('Sertifikat', [
            "sertifikats" => $sertifikats,
            'user' => $user
         ]);
    }

    // Fungsi untuk upload modul
    public function upload(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_sertifikat' => 'required|string|max:255',
            'file' => 'required|mimes:pdf,doc,docx,jpg,jpeg,png,gif|max:10240', // Maksimal 10 MB
        ]);

        // Proses upload file
        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('sertifitat_files', 'public'); // Simpan di storage/public/modul_files
        }

        // Simpan data ke database
        sertifikats::create([
            'nama_sertifikat' => $request->nama_sertifikat, 
            'file' => $filePath,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('Sertifikat')->with('success', 'Modul berhasil di-upload.');
    }
    
    public function destroy($id)
    {
        // Find the Sertifikat by ID
        $sertifikat = sertifikats::findOrFail($id);

        // Optionally delete the file from storage
        if (Storage::disk('public')->exists('sertifikat_files/' . $sertifikat->file)) {
            Storage::disk('public')->delete('sertifikat_files/' . $sertifikat->file);
        }

        // Delete the sertifikate record from the database
        $sertifikat->delete();

        // Redirect back with a success message
        return redirect()->route('Sertifikat')->with('success', 'sertifikat berhasil dihapus!');
    }
}
