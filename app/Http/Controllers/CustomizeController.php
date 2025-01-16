<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\moduls;
use App\Models\Tanggal;
use App\Models\Souvenir;
use App\Models\Instruktur;
use App\Models\Sertifikats;
use Illuminate\Http\Request;
use App\Models\kelas_customize;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CustomizeController extends Controller
{
    public function index()
    {
        $kelas_customize = DB::table('kelas_customizes')->get();
        $moduls = moduls::all();
        $users = users::all();
        $user = Auth::user();
        $sertifikats = Sertifikats::all();
        $tanggal = Tanggal::all();
        
        return view('Customize', [
           "kelas_customize" => $kelas_customize,
           'moduls' => $moduls,
           'users' => $users,
           'user' => $user,
           'sertifikats' => $sertifikats,
           'tanggal' => $tanggal,
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

        kelas_customize::create($data); // Menggunakan model kelas_program untuk menyimpan data
        return redirect()->route('Customize');
    }

    public function edit($id) {
        $customize = kelas_customize::findOrFail($id);
        $user = Auth::user();
        $users = users::all(); 
        $moduls = Moduls::all(); 
        $tanggal = Tanggal::all();
        $instrukturs = Instruktur::all();
        $sertifikats = sertifikats::all();
        $souvenir = Souvenir::all(); 
        return view('auth.tambah_customize', compact('user','users','moduls','customize','tanggal','instrukturs','sertifikats','souvenir'));
    
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
        kelas_customize::find($id)->update($data);
       
        return redirect()->route('Customize')->with('success', 'Jadwal berhasil diupdate.');
    }

    public function hapus($id)
{
    $customize = kelas_customize::findOrFail($id);
    $customize->delete();

    return redirect()->route('Customize')->with('success', 'Customize berhasil dihapus');
}

    public function tambahjadwal()
    {
        return view('auth.tambah_customize', compact('user')); 
    }
}
