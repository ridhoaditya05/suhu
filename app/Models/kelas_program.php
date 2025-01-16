<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas_program extends Model
{
    use HasFactory;

    protected $fillable = [
        'week',
        'materi',
        'instansi',
        'pax',
        'tanggal',
        'durasi',
        'instruktur',
        'cc',
        'venue',
        'hotel_peserta',
        'nilai_invoice',
        'pic_peserta',
        'note',
        'id_modul',
        'id_sertifikat',
        'id_souvenir',
        'souvenir',
        'modul',
        'sertifikat',
    ];

    protected $table = 'kelas_programs'; 

}

