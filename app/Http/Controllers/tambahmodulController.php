<?php

namespace App\Http\Controllers;


use App\Models\moduls;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class tambahmodulController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $moduls = moduls::all();
    
        return view('auth.tambah.tambah_modul', [
            'user' => $user,
            'moduls' => $moduls
        ]);
        
    }

    public function simpan(Request $request)
    {
        $data = [
            'nama_modul' => $request->nama_modul,
            'deskripsi' => $request->deskripsi,
            'file' => $request->file,
        
        ];

        moduls::create($data); // Menggunakan model kelas_program untuk menyimpan data
        return redirect()->route('Modul');
    }
    
    public function edit(moduls $modul)
    {
        return view('auth.tambah.tambah_modul', compact('modul'));
    }
        public function store(Request $request)
        {
            // Validasi input
            $validatedData = $request->validate([
                'nama_modul' => 'required',
                'deskripsi' => 'required',
                'file' => 'required',
                
            ]);
    
            // Buat record baru di database
            moduls::create($validatedData);
    
            // Redirect atau beri respon sesuai kebutuhan
            return redirect()->route('tambah_modul')->with('success', 'Modul berhasil ditambahkan.');
        }
    
        public function destroy($id)
{
    // Mencari modul berdasarkan ID
    $modul = moduls::find($id);
    
    
    if ($modul) {
        // Menghapus file jika ada
        if ($modul->file && file_exists(public_path('storage/' . $modul->file))) {
            unlink(public_path('storage/' . $modul->file));
        }
        
        // Menghapus modul
        $modul->delete();
        
        // Redirect dengan pesan sukses
        return redirect()->route('Modul')->with('success', 'Modul berhasil dihapus.');
    } else {
        // Jika modul tidak ditemukan
        return redirect()->route('Modul')->with('error', 'Modul tidak ditemukan.');
    }
}
}
