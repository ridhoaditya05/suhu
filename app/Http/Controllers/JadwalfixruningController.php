<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\moduls;
use App\Models\Tanggal;
use App\Models\Souvenir;
use App\Models\Instruktur;
use App\Models\sertifikats;
use Illuminate\Http\Request;
use App\Models\kelas_fixruning;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class JadwalfixruningController extends Controller
{
    public function index()
    {
        $kelas_fixruning = kelas_fixruning::all();
        $user = Auth::user();
        $moduls = moduls::all();
        $users = users::all();
        $tanggal = Tanggal::all();
        $instrukturs = Instruktur::all();
        $sertifikats = sertifikats::all();
        $souvenir = Souvenir::all();
        
        return view('auth.tambah_fixruning', [
            'kelas_fixruning' => $kelas_fixruning,
            'user' => $user,
            'moduls' => $moduls,
            'users' => $users,
            'tanggal' => $tanggal,
            'instrukturs' => $instrukturs,
            'sertifikats' => $sertifikats,
            'souvenir' => $souvenir,
        ]);
    }
    
    public function edit(kelas_fixruning $fixruning)
    {
        $user = Auth::user();
        $users = User::all();
        $moduls = Moduls::all(); 
        return view('auth.tambah_fixruning', compact('fixruning', 'users','user','moduls'));
    }
        public function store(Request $request)
        {
            // Validasi input
            $validatedData = $request->validate([
                'week' => 'required',
                'materi' => 'required',
                'instansi' => 'required',
                'pax' => 'required',
                'tanggal' => 'required',
                'durasi' => 'required',
                'instruktur' => 'required',
                'cc' => 'required',
                'venue' => 'required',
                'hotel_peserta' => 'required',
                'nilai_invoice' => 'required',
                'pic_peserta' => 'required',
                'note' => 'required',
                'modul' => 'required|string',
                'sertifikat' => 'required|string',
                'souvenir' => 'required',
            ]);
    
            // Buat record baru di database
            kelas_fixruning::create($validatedData);
    
            // Redirect atau beri respon sesuai kebutuhan
            return redirect()->route('tambah_fixruning')->with('success', 'Jadwal berhasil ditambahkan.');
        }
    
        public function update(Request $request, kelas_fixruning $fixruning)
        {
            // Validasi input
            $validatedData = $request->validate([
                'week' => 'required',
                'materi' => 'required',
                'instansi' => 'required',
                'pax' => 'required',
                'tanggal' => 'required',
                'durasi' => 'required',
                'instruktur' => 'required',
                'cc' => 'required',
                'venue' => 'required',
                'hotel_peserta' => 'required',
                'nilai_invoice' => 'required',
                'pic_peserta' => 'required',
                'note' => 'required',
                'modul' => 'required|string',
                'sertifikat' => 'required|string',
                'souvenir' => 'required',
            ]);
    
            // Perbarui record di database
            $fixruning->update($validatedData);
    
            // Redirect atau beri respon sesuai kebutuhan
            return redirect()->route('FixRuning')->with('success', 'Jadwal berhasil diperbarui.');
        }
}
