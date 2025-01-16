<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\moduls;
use App\Models\Tanggal;
use App\Models\Souvenir;
use App\Models\Instruktur;
use App\Models\sertifikats;
use Illuminate\Http\Request;
use App\Models\kelas_customize;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class JadwalcustomizeController extends Controller
{
    public function index()
{
    $kelas_customize = kelas_customize::all();
    $moduls = moduls::all();
     $users = users::all();
     $user = Auth::user();
     $tanggal = Tanggal::all();
     $instrukturs = Instruktur::all();
     $sertifikats = sertifikats::all();
     $souvenir = Souvenir::all();

    return view('auth.tambah_customize', [
        'kelas_customize' => $kelas_customize,
        'user' => $user,
        'moduls' => $moduls,
        'users' => $users,
        'tanggal' => $tanggal,
        'instrukturs' => $instrukturs,
        'sertifikats' => $sertifikats,
        'souvenir' => $souvenir,
    ]);
}

public function edit(kelas_customize $customize)
{
    $user = Auth::user();
    $users = User::all();
    $moduls = Moduls::all(); 
    $tanggal = Tanggal::all();
    $instrukturs = Instruktur::all();
    $sertifikats = sertifikats::all();
    $souvenir = Souvenir::all(); 
    return view('auth.tambah_customize', compact('customize','users','moduls','instrukturs','souvenir','sertifikats','tanggal'));
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
        kelas_customize::create($validatedData);

        // Redirect atau beri respon sesuai kebutuhan
        return redirect()->route('tambah_customize')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    public function update(Request $request, kelas_customize $customize)
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
        $customize->update($validatedData);

        // Redirect atau beri respon sesuai kebutuhan
        return redirect()->route('Customize')->with('success', 'Jadwal berhasil diperbarui.');
    }
}
