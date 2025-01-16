<?php

namespace App\Http\Controllers;

use App\Models\Tanggal;
use Illuminate\Http\Request;

class DateController extends Controller
{
    public function updateTanggal(Request $request)
{
    $action = $request->input('action');
    $date = $request->input('date');

    if (!$date) {
        return response()->json(['success' => false, 'message' => 'Tanggal tidak valid.'], 400);
    }

    if ($action === 'add') {
        $exists = Tanggal::where('date', $date)->exists();
        if ($exists) {
            return response()->json(['success' => false, 'message' => 'Tanggal sudah ada.']);
        }

        Tanggal::create(['date' => $date]);
        return response()->json(['success' => true, 'message' => 'Tanggal berhasil ditambahkan.']);
    } elseif ($action === 'remove') {
        $tanggal = Tanggal::where('date', $date)->first();
        if (!$tanggal) {
            return response()->json(['success' => false, 'message' => 'Tanggal tidak ditemukan.']);
        }

        $tanggal->delete();
        return response()->json(['success' => true, 'message' => 'Tanggal berhasil dihapus.']);
    }

    return response()->json(['success' => false, 'message' => 'Aksi tidak valid.'], 400);
}


    public function showForm()
    {
        // Ambil semua tanggal dari database
        $tanggal = Tanggal::all();

        return view('tanggal-form', compact('tanggal'));
    }

    public function deleteTanggal(Request $request)
{
    $request->validate([
        'date' => 'required|date|exists:tanggal,date',
    ]);

    try {
        // Hapus tanggal dari database
        $tanggal = Tanggal::where('date', $request->input('date'))->first();
        if ($tanggal) {
            $tanggal->delete();

            return response()->json([
                'success' => true,
                'message' => 'Tanggal berhasil dihapus.',
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Tanggal tidak ditemukan.',
        ], 404);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Gagal menghapus tanggal: ' . $e->getMessage(),
        ], 500);
    }
}

}


