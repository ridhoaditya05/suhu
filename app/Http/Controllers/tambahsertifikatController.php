<?php

namespace App\Http\Controllers;

use App\Models\sertifikats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class tambahsertifikatController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $sertifikats = sertifikats::all();
    
        return view('auth.tambah.tambah_sertifikat', [
            'user' => $user,
            'sertifikats' => $sertifikats
        ]);
        
    }

    public function simpan(Request $request)
    {
        $data = [
            'nama_modul' => $request->nama_modul,
            'file' => $request->file,
        
        ];

        sertifikats::create($data); // Menggunakan model kelas_program untuk menyimpan data
        return redirect()->route('Sertifikat');
    }
    
    public function edit(sertifikats $sertifikat)
    {
        return view('auth.tambah.tambah_sertifikat', compact('sertifikat'));
    }
        public function store(Request $request)
        {
            // Validasi input
            $validatedData = $request->validate([
                'nama_modul' => 'required',
                'file' => 'required',
                
            ]);
    
            // Buat record baru di database
            sertifikats::create($validatedData);
    
            // Redirect atau beri respon sesuai kebutuhan
            return redirect()->route('tambah_sertifikat')->with('success', 'Modul berhasil ditambahkan.');
        }
    
        public function destroy($id)
{
    // Mencari modul berdasarkan ID
    $sertifikat = sertifikats::find($id);
    
    
    if ($sertifikat) {
        // Menghapus file jika ada
        if ($sertifikat->file && file_exists(public_path('storage/' . $sertifikat->file))) {
            unlink(public_path('storage/' . $sertifikat->file));
        }
        
        // Menghapus modul
        $sertifikat->delete();
        
        // Redirect dengan pesan sukses
        return redirect()->route('Sertifikat')->with('success', 'Sertifikat berhasil dihapus.');
    } else {
        // Jika modul tidak ditemukan
        return redirect()->route('Sertifikat')->with('error', 'Sertifikat tidak ditemukan.');
    }
}
}
