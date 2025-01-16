<?php

namespace App\Http\Controllers;

use App\Models\moduls;
use Illuminate\Http\Request;
use App\Models\Kelas_program;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ModulController extends Controller
{
    public function index()
    {
        $moduls = DB::table('moduls')->get();


        $user = Auth::user();

        return view('Modul', [
            "moduls" => $moduls,
            'user' => $user
         ]);
    }

    // Fungsi untuk upload modul
    public function upload(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_modul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'file' => 'required|mimes:pdf,doc,docx,jpg,jpeg,png,heic,gif|max:10240', // Maksimal 10 MB
        ]);

        // Proses upload file
        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('modul_files', 'public'); // Simpan di storage/public/modul_files
        }

        // Simpan data ke database
        Moduls::create([
            'nama_modul' => $request->nama_modul,
            'deskripsi' => $request->deskripsi,
            'file' => $filePath,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('Modul')->with('success', 'Modul berhasil di-upload.');
    }
    public function destroy($id)
    {
        // Find the module by ID
        $modul = Moduls::findOrFail($id);

        // Optionally delete the file from storage
        if (Storage::disk('public')->exists('modul_files/' . $modul->file)) {
            Storage::disk('public')->delete('modul_files/' . $modul->file);
        }

        // Delete the module record from the database
        $modul->delete();

        // Redirect back with a success message
        return redirect()->route('Modul')->with('success', 'Modul berhasil dihapus!');
    }
}
