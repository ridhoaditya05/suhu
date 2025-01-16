<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\moduls;
use App\Models\Tanggal;
use App\Models\Souvenir;
use App\Models\Instruktur;
use App\Models\sertifikats;
use Illuminate\Http\Request;
use App\Models\kelas_webinar;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class JadwalwebinarController extends Controller
{
        public function index()
    {
        $user = Auth::user();
        $kelas_webinar = kelas_webinar::all();
        $moduls = moduls::all();
        $users = users::all();
        $tanggal = Tanggal::all();
        $souvenir = Souvenir::all();
        $tanggal = Tanggal::all();
        $instrukturs = Instruktur::all();
        $sertifikats = sertifikats::all();
        
        return view('auth.tambah_webinar', [
            'user' => $user,
            'kelas_webinar' => $kelas_webinar,
            'moduls' => $moduls,
            'users' => $users,
            'tanggal' => $tanggal,
            'souvenir' => $souvenir,
            'instrukturs' => $instrukturs,
            'sertifikats' => $sertifikats,
        ]);
    }
    
        public function edit(kelas_webinar $webinar)
    {
        $user = Auth::user();
        $users = User::all();
        $moduls = Moduls::all(); 
        $tanggal = Tanggal::all();
        $instrukturs = Instruktur::all();
        $sertifikats = sertifikats::all();
        $souvenir = Souvenir::all(); 
        return view('auth.tambah_webinar', compact('webinar', 'users','user','moduls','tanggal','instrukturs','souvenir','sertifikats')); 
    }
        public function store(Request $request)
        {
            // Validasi input
            $validatedData = $request->validate([
                'week' => 'required',
                'materi' => 'required',
                'instansi' => 'required',
                'pax' => 'required|integer',
                'tanggal' => 'required|date',
                'durasi' => 'required',
                'instruktur' => 'required',
                'cc' => 'required',
                'venue' => 'required',
                'hotel_peserta' => 'required',
                'nilai_invoice' => 'required|numeric',
                'pic_peserta' => 'required',
                'note' => 'nullable|string',
                'modul' => 'required|string',
                'sertifikat' => 'required|string',
                'souvenir' => 'required',
            ]);
    
            // Buat record baru di database
            kelas_webinar::create($validatedData);
    
            // Redirect atau beri respon sesuai kebutuhan
            return redirect()->route('tambah_webinar')->with('success', 'Jadwal berhasil ditambahkan.');
        }
    
        public function update(Request $request, kelas_webinar $webinar)
        {
            // Validasi input
            $validatedData = $request->validate([
                'week' => 'required',
                'materi' => 'required',
                'instansi' => 'required',
                'pax' => 'required|integer',
                'tanggal' => 'required|date',
                'durasi' => 'required',
                'instruktur' => 'required',
                'cc' => 'required',
                'venue' => 'required',
                'hotel_peserta' => 'required',
                'nilai_invoice' => 'required|numeric',
                'pic_peserta' => 'required',
                'note' => 'nullable|string',
                'modul' => 'required|string',
                'sertifikat' => 'required|string',
                'souvenir' => 'required',
            ]);
    
            // Perbarui record di database
            $webinar->update($validatedData);
    
            // Redirect atau beri respon sesuai kebutuhan
            return redirect()->route('Webinar')->with('success', 'Jadwal berhasil diperbarui.');
        }
}
