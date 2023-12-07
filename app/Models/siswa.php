<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $siswa = 'siswa';
    protected $nisn = 'nisn';
    protected $kelas = 'kelas';
    protected $table = 'siswa';

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }


}
