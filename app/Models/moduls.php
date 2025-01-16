<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class moduls extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_modul',
        'deskripsi',
        'file',
        
    ];

    protected $table = 'moduls'; // Jika nama tabel berbeda
    
}
