<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade
class kelas extends Controller
{
    public function index()
    {
        // Fetch $guruData from your database or any source
        $kelas = DB::select('SELECT * FROM kelas');

        return view('superadmin/manajemenuser/daftarkelassiswa-superadminMU')->with('kelas', $kelas);
    }

    public function tambahkelas(Request $request)
    {
        
    // Ambil data yang dikirimkan melalui form
    $id_kelas = $request->input('id_kelas');
    $wali_kelas = $request->input('wali_kelas');
    $nama_kelas = $request->input('nama_kelas');
    $tingkatan = $request->input('tingkatan_kelas');
    $kelompok_kelas = $request->input('kelompok_kelas');

    // Masukkan data kelas baru ke dalam tabel kelas menggunakan Query Builder
    DB::table('kelas')->insert([
        'id_kelas' => $id_kelas,
        'wali_kelas' => $wali_kelas,
        'nama_kelas' => $nama_kelas,
        'tingkatan' => $tingkatan,
        'kelompok_kelas' => $kelompok_kelas,
       
    ]);

    
}
/*
public function kelassiswa($id_kelas) {
    $kelas = Kelas::find($id_kelas); // Ambil data kelas berdasarkan ID
    if (!$kelas) {
        abort(404); // Menangani jika kelas tidak ditemukan
    }
    
    $siswa = $kelas->siswa; // Ambil daftar siswa dari relasi antara kelas dan siswa
    
    return view('superadmin.manajemenuser.listsiswa-superadminMU', [
        'siswa' => $siswa,
    ]);
}
*/
public function showekskul()
{
    // Fetch $guruData from your database or any source
    $ekstrakurikuler = DB::select('SELECT * FROM ekstrakurikuler');

    return view('/superadmin/daftarekskul-superadmin')->with('ekstrakurikuler', $ekstrakurikuler);
}       
    }


