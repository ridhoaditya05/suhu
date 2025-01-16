<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\moduls;
use App\Models\Souvenir;
use App\Models\Instruktur;
use App\Models\sertifikats;
use Illuminate\Http\Request;
use App\Models\kelas_program;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ProgramController extends Controller
{
    public function index()
    {
        $moduls = moduls::all();
        $sertifikats = Sertifikats::all();
        $souvenir = Souvenir::all();
        $kelas_program = DB::table('kelas_programs')->get();
        $user = Auth::user();
        
        return view('Program', [
           "kelas_program" => $kelas_program,
           'user' => $user,
           'moduls' => $moduls,
           'sertifikats' => $sertifikats,
           'souvenir' => $souvenir,
        ]);
    }

public function simpan(Request $request)
{
    $data = [
        'week' => $request->week,
        'materi' => $request->materi,
        'instansi' => $request->instansi,
        'pax' => $request->pax,
        'tanggal' => $request->tanggal,
        'durasi' => $request->durasi,
        'instruktur' => $request->instruktur,
        'cc' => $request->cc,
        'venue' => $request->venue,
        'hotel_peserta' => $request->hotel_peserta,
        'nilai_invoice' => $request->nilai_invoice,
        'pic_peserta' =>$request->pic_peserta,
        'note' => $request->note,
        'modul' => $request->modul,
        'sertifikat' => $request->sertifikat,
        'souvenir' => $request->souvenir,
    ];

    kelas_program::create($data); // Menggunakan model kelas_program untuk menyimpan data
    return redirect()->route('Program');
}


    public function edit($id) 
    {
        $program = kelas_program::findOrFail($id);
        $user = Auth::user(); 
        return view('auth.tambah_jadwal', compact('user','program'));
    }


    public function update($id, Request $request )
    {
        $data = [
            'week' => $request->week,
            'materi' => $request->materi,
            'instansi' => $request->instansi,
            'pax' => $request->pax,
            'tanggal' => $request->tanggal,
            'durasi' => $request->durasi,
            'instruktur' => $request->instruktur,
            'cc' => $request->cc,
            'venue' => $request->venue,
            'hotel_peserta' => $request->hotel_peserta,
            'nilai_invoice' => $request->nilai_invoice,
            'pic_peserta' =>$request->pic_peserta,
            'note' => $request->note,
            'modul' => $request->modul,
            'sertifikat' => $request->sertifikat,
            'souvenir' => $request->souvenir,
        ];
        kelas_program::find($id)->update($data);
       
        return redirect()->route('Program')->with('success', 'Jadwal berhasil diupdate.');
    }
  

    public function hapus($id)
{
    $program = kelas_program::findOrFail($id);
    $program->delete();
    
    // Debugging: pastikan data dihapus
    Log::info("Program dengan ID {$id} telah dihapus.");

    return redirect()->route('Program')->with('success', 'Program berhasil dihapus');
}

    public function tambahJadwal()
{
    $moduls = moduls::all();
    $user = Auth::user(); // mengambil data pengguna yang sedang login
    return view('auth.tambah_jadwal', compact('user'));
}

   
}
