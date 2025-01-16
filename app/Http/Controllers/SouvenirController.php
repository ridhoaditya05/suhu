<?php

namespace App\Http\Controllers;

use App\Models\Souvenir;
use Illuminate\Http\Request;

class SouvenirController extends Controller
{
    public function updateSouvenir(Request $request)
    {
        $action = $request->input('action');
        $souvenir = $request->input('souvenir');

        if (!$souvenir) {
            return response()->json(['success' => false, 'message' => 'Souvenir tidak valid.'], 400);
        }

        if ($action === 'add') {
            $exists = Souvenir::where('name', $souvenir)->exists();
            if ($exists) {
                return response()->json(['success' => false, 'message' => 'Souvenir sudah ada.']);
            }

            Souvenir::create(['name' => $souvenir]);
            return response()->json(['success' => true, 'message' => 'Souvenir berhasil ditambahkan.']);
        } elseif ($action === 'remove') {
            $souvenirItem = Souvenir::where('name', $souvenir)->first();
            if (!$souvenirItem) {
                return response()->json(['success' => false, 'message' => 'Souvenir tidak ditemukan.']);
            }

            $souvenirItem->delete();
            return response()->json(['success' => true, 'message' => 'Souvenir berhasil dihapus.']);
        }

        return response()->json(['success' => false, 'message' => 'Aksi tidak valid.'], 400);
    }

    public function showForm()
    {
        $souvenirs = Souvenir::all();
        return view('souvenir-form', compact('souvenirs'));
    }
}

