<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kepala_sekolah extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_Kepsek ', 'Nama_Kepsek', 'Jenjang_Pendidikan', 'Jenis_Kelamin', 'Tempat_Lahir', 'Tanggal_Lahir', 'TMT_Kerja', 'Status'
    ];

}
