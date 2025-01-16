<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instruktur;

class InstrukturController extends Controller
{   
    public function updateInstruktur(Request $request)
    {
        $action = $request->input('action');
        $instructor = $request->input('instructor');
    
        // Validasi jika instruktur tidak kosong
        if (!$instructor) {
            return response()->json(['success' => false, 'message' => 'Nama instruktur tidak valid.'], 400);
        }
    
        if ($action === 'add') {
            // Cek apakah instruktur sudah ada
            if (Instruktur::where('name', $instructor)->exists()) {
                return response()->json(['success' => false, 'message' => 'Instruktur sudah ada.'], 400);
            }
    
            // Simpan instruktur ke database
            $instructorModel = new Instruktur();
            $instructorModel->name = $instructor;
            $instructorModel->save();
    
            return response()->json(['success' => true, 'message' => 'Instruktur berhasil ditambah.']);
        } elseif ($action === 'remove') {
            // Hapus instruktur dari database
            $instructorModel = Instruktur::where('name', $instructor)->first();
            if ($instructorModel) {
                $instructorModel->delete();
                return response()->json(['success' => true, 'message' => 'Instruktur berhasil dihapus.']);
            }
    
            return response()->json(['success' => false, 'message' => 'Instruktur tidak ditemukan.'], 404);
        }
    
        return response()->json(['success' => false, 'message' => 'Aksi tidak valid.'], 400);
        
    }

    public function showForm()
    {
        // Ambil semua instruktur yang ada di database
        $instrukturs = Instruktur::all();
        
        // Kirim data instruktur ke view
        return view('auth.tambah_jadwal', compact('instrukturs'));
    }
    
    public function updateInstructor(Request $request)
{
    $request->validate([
        'instruktur' => 'required|string|max:255',
        'action' => 'required|string|in:add,remove',
    ]);

    if ($request->action === 'add') {
        // Tambahkan instruktur baru ke database
        Instruktur::create(['name' => $request->instruktur]);
        return response()->json(['success' => true, 'message' => 'Instruktur berhasil ditambahkan.']);
    } elseif ($request->action === 'remove') {
        // Hapus instruktur dari database
        $instrukturs = Instruktur::where('name', $request->instrukturs)->first();
        if ($instrukturs) {
            $instrukturs->delete();
            return response()->json(['success' => true, 'message' => 'Instruktur berhasil dihapus.']);
        }
        return response()->json(['success' => false, 'message' => 'Instruktur tidak ditemukan.']);
    }

    return response()->json(['success' => false, 'message' => 'Aksi tidak valid.']);
}

}
