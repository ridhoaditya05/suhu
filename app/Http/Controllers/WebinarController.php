<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\moduls;
use App\Models\Tanggal;
use App\Models\Souvenir;
use App\Models\Instruktur;
use App\Models\Sertifikats;
use Illuminate\Http\Request;
use App\Models\kelas_webinar;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class WebinarController extends Controller
{
    public function index()
    {
        $kelas_webinar = DB::table('kelas_webinars')->get();
        $moduls = moduls::all();
        $users = users::all();
        $user = Auth::user();
        $sertifikats = Sertifikats::all();
        
        return view('webinar', [
           "kelas_webinar" => $kelas_webinar,
           'moduls' => $moduls,
           'users' => $users,
           'user' => $user,
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

        kelas_webinar::create($data); // Menggunakan model kelas_program untuk menyimpan data
        return redirect()->route('Webinar');
    }

    public function edit($id) {
        $webinar = kelas_webinar::findOrFail($id);
        $user = Auth::user();
        $moduls = Moduls::all(); 
        $tanggal = Tanggal::all();
        $instrukturs = Instruktur::all();
        $sertifikats = sertifikats::all();
        $souvenir = Souvenir::all(); 
        return view('auth.tambah_webinar', compact('user', 'webinar', 'moduls','tanggal','instrukturs','souvenir','sertifikats',));
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
        kelas_webinar::find($id)->update($data);
       
        return redirect()->route('Webinar')->with('success', 'Jadwal berhasil diupdate.');
    }

    public function hapus($id)
{
    $webinar = kelas_webinar::findOrFail($id);
    $webinar->delete();

    return redirect()->route('Webinar')->with('success', 'Webinar berhasil dihapus');
}

    public function tambahjadwal()
    {
        return view('auth.tambah_webinar', compact('user')); 
    }

    // Di Controller
public function create()
{
    $moduls = moduls::all(); // Ambil semua modul
    return view('Webinar', compact('moduls')); // Kirim ke view
}
}
