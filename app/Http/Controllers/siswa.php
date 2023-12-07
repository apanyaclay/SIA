<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade
use App\Models\siswa as SiswaModel;
use App\Models\absensi_kelas;
use App\Models\siswadetail;
class siswa extends Controller
{
    public function index()
    {
        // Fetch $guruData from your database or any source
        $siswa = DB::select('SELECT * FROM siswa');

        return view('superadmin/manajemenuser/listsiswa-superadminMU')->with('siswa', $siswa);
    }

    public function siswadetail()
    {
        // Fetch $guruData from your database or any source
        $siswa = DB::select('SELECT * FROM siswa');

        return view('superadmin/manajemenuser/detailsiswa-superadminMU')->with('siswa', $siswa);
    }

    public function showByKelas(Request $request)
{
    $kelas_id = $request->input('kelas_id');
    // Lakukan pengolahan data di sini untuk mendapatkan daftar siswa berdasarkan $kelas_id

    // Contoh pengambilan data siswa dari database
    $absensi_kelas = absensi_kelas::where('kelas', $kelas_id)->select('ID_Absensi','ID_Siswa', 'Kelas','Tanggal','Hadir','Izin','Alpa','Sakit')->get();
    return view('superadmin/manajemenuser/listsiswa-superadminMU', ['absensi_kelas' => $absensi_kelas,'kelas' => $kelas_id  ]);
        
    
}

public function showSiswa(Request $request)
{
    
    // Contoh pengambilan data siswa dari database
    $siswa = SiswaModel::where('nisn', $nisn)->select('NISN','NIPD', 'Nama_Siswa','Jenis_Kelamin','Tempat_Lahir','Tanggal_Lahir','Agama','Alamat', 'No_hp','Status_dlm_Klrg','Nama_Ayah','Nama_Ibu','Pekerjaan_Ayah','Pekerjaan_Ibu','No_Rek_Bank','Bank_Atas_Nama','Status_Siswa','Sekolah_Asal','Anak_Ke')->first();
    return view('superadmin/manajemenuser/detailsiswa-superadminMU', ['siswa' => $siswa ]);
        
    
}





}
