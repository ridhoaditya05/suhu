<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\moduls;
use App\Models\Tanggal;
use App\Models\Souvenir;
use App\Models\Instruktur;
use App\Models\Sertifikats;
use Illuminate\Http\Request;
use App\Models\kelas_fixruning;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FixRuningController extends Controller
{
    public function index()
    {
        $kelas_fixruning = DB::table('kelas_fixrunings')->get();
        $moduls = moduls::all();
        $user = Auth::user();
        $users = users::all();
        $sertifikats = Sertifikats::all();
        
        return view('FixRuning', [
            "kelas_fixruning" => $kelas_fixruning,
            'user' => $user,
            'moduls' => $moduls,
            'users' => $users,
            'sertifikats' => $sertifikats,
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

        kelas_fixruning::create($data); // Menggunakan model kelas_program untuk menyimpan data
        return redirect()->route('FixRuning');
    }

    public function edit($id) {
        $fixruning = kelas_fixruning::findOrFail($id);
        $user = Auth::user();
        $moduls = Moduls::all(); 
        $tanggal = Tanggal::all();
        $instrukturs = Instruktur::all();
        $sertifikats = sertifikats::all();
        $souvenir = Souvenir::all(); 
        return view('auth.tambah_fixruning', compact('user', 'moduls','fixruning','tanggal','instrukturs','sertifikats','souvenir'));
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
        kelas_fixruning::find($id)->update($data);
       
        return redirect()->route('FixRuning')->with('success', 'Jadwal berhasil diupdate.');
    }

    public function hapus($id)
{
    $fixruning = kelas_fixruning::findOrFail($id);
    $fixruning->delete();

    return redirect()->route('FixRuning')->with('success', 'FixRuning berhasil dihapus');
}

    public function tambahjadwal()
    {
        return view('auth.tambah_fixruning', compact('user')); 
    }
}
