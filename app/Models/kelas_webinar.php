<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas_webinar extends Model
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
        'modul',
        'sertifikat',
        'id_souvenir',
        'souvenir',
    ];
}
