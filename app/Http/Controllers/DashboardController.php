<?php

namespace App\Http\Controllers;

use App\Models\kelas_customize;
use App\Models\kelas_fixruning;
use App\Models\Kelas_program;
use App\Models\kelas_webinar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $kelas_program = Kelas_program::all();
        $kelas_webinar = kelas_webinar::all();
        $kelas_fixruning = kelas_fixruning::all();
        $kelas_customize = kelas_customize::all();
        $user = Auth::user();
        
        return view('dashboard', compact('user', 'kelas_program', 'kelas_webinar', 'kelas_fixruning', 'kelas_customize'));
    }

  

}
