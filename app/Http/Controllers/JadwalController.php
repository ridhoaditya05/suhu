<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\Jadwal;
use App\Models\moduls;
use App\Models\Tanggal;
use App\Models\Souvenir;
use App\Models\Instruktur;
use Illuminate\Http\Request;
use App\Models\kelas_program;
use App\Models\sertifikats;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    public function index()
    {
        $kelas_program = kelas_program::all();
        $moduls = moduls::all();
        $users = users::all();
        $user = Auth::user(); 
        $instrukturs = Instruktur::all();
        $tanggal = Tanggal::all();
        $souvenir = Souvenir::all();
        $sertifikats = sertifikats::all();

        return view('auth.tambah_jadwal', [
            'kelas_program' => $kelas_program,
            'user' => $user,
            'moduls' => $moduls,
            'users' => $users,
            'instrukturs' => $instrukturs,
            'tanggal' => $tanggal,
            'souvenir' => $souvenir,
            'sertifikats' => $sertifikats,
        ]);
    }

    public function edit(Kelas_program $program)
    {
        $user = Auth::user();
        $users = User::all();
        $moduls = Moduls::all(); 
        $souvenir = Souvenir::all(); 
        $tanggal = Tanggal::all();
        $instrukturs = Instruktur::all();
        $sertifikats = sertifikats::all();
        return view('auth.tambah_jadwal', compact('program','users','souvenir','user','moduls','tanggal','instrukturs','sertifikats'));
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

    // Menyimpan data ke database
    kelas_program::create($validatedData);

    // Redirect atau beri respon sesuai kebutuhan
    return redirect()->route('tambah_jadwal')->with('success', 'Jadwal berhasil ditambahkan.');
}

public function update(Request $request, Kelas_program $program)
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
    $program->update($validatedData);

    return redirect()->route('Program')->with('success', 'Jadwal berhasil diperbarui.');
}

    public function tambahJadwal()
{
    $moduls = moduls::all();
    $user = Auth::user(); // mengambil data pengguna yang sedang login
    return view('auth.tambah_jadwal', compact('user'));
}


    
}
