<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade
use App\Models\Post;
class LogController extends Controller
{
    public function index()
    {
        // Fetch $guruData from your database or any source
        $log_absensi_ekskul = DB::select('SELECT * FROM log_absensi_ekskul');

        return view('superadmin/log/log_absensi_ekskul')->with('log_absensi_ekskul', $log_absensi_ekskul);
    }

    public function absen_kelas()
    {
        // Fetch $guruData from your database or any source
        $log_absensi_kelas = DB::select('SELECT * FROM log_absensi_kelas');

        return view('superadmin/log/log_absensi_kelas')->with('log_absensi_kelas', $log_absensi_kelas);
    }

    public function ekskul_siswa()
    {
        // Fetch $guruData from your database or any source
        $log_ekskul_siswa = DB::select('SELECT * FROM log_ekskul_siswa');

        return view('superadmin/log/log_ekskul_siswa')->with('log_ekskul_siswa', $log_ekskul_siswa);
    }

    public function ekskul()
    {
        // Fetch $guruData from your database or any source
        $log_ekstrakurikuler = DB::select('SELECT * FROM log_ekstrakurikuler');

        return view('superadmin/log/log_ekskul')->with('log_ekstrakurikuler', $log_ekstrakurikuler);
    }
    
    public function guru()
    {
        // Fetch $guruData from your database or any source
        $log_guru = DB::select('SELECT * FROM log_guru');

        return view('superadmin/log/log_guru')->with('log_guru', $log_guru);
    }

    public function kelas_log()
    {
        // Fetch $guruData from your database or any source
        $log_kelas = DB::select('SELECT * FROM log_kelas');

        return view('superadmin/log/log_kelas')->with('log_kelas', $log_kelas);
    }

    public function jadwalmapel()
    {
        // Fetch $guruData from your database or any source
        $log_jadwal_mapel = DB::select('SELECT * FROM log_jadwal_mapel');

        return view('superadmin/log/log_jadwal_mapel')->with('log_jadwal_mapel', $log_jadwal_mapel);
    }

    public function kepsek_log()
    {
        // Fetch $guruData from your database or any source
        $log_kepala_sekolah = DB::select('SELECT * FROM log_kepala_sekolah');

        return view('superadmin/log/log_kepala_sekolah')->with('log_kepala_sekolah', $log_kepala_sekolah);
    }

    public function mapel_log()
    {
        // Fetch $guruData from your database or any source
        $log_mata_pelajaran = DB::select('SELECT * FROM log_mata_pelajaran');

        return view('superadmin/log/log_mata_pelajaran')->with('log_mata_pelajaran', $log_mata_pelajaran);
    }

    public function nilai_ekskul_log()
    {
        // Fetch $guruData from your database or any source
        $log_nilai_ekskul = DB::select('SELECT * FROM log_nilai_ekskul');

        return view('superadmin/log/log_nilai_ekskul')->with('log_nilai_ekskul', $log_nilai_ekskul);
    }

    public function nilai_log()
    {
        // Fetch $guruData from your database or any source
        $log_nilai = DB::select('SELECT * FROM log_nilai');

        return view('superadmin/log/log_nilai')->with('log_nilai', $log_nilai);
    }

    public function prestasi_log()
    {
        // Fetch $guruData from your database or any source
        $log_prestasi = DB::select('SELECT * FROM log_prestasi');

        return view('superadmin/log/log_prestasi')->with('log_prestasi', $log_prestasi);
    }

    public function rapor_log()
    {
        // Fetch $guruData from your database or any source
        $log_rapor = DB::select('SELECT * FROM log_rapor');

        return view('superadmin/log/log_rapor')->with('log_rapor', $log_rapor);
    }

    public function role_assign_log()
    {
        // Fetch $guruData from your database or any source
        $log_role_assignment = DB::select('SELECT * FROM log_role_assignment');

        return view('superadmin/log/log_role_assignment')->with('log_role_assignment', $log_role_assignment);
    }

    public function roles_log()
    {
        // Fetch $guruData from your database or any source
        $log_roles = DB::select('SELECT * FROM log_roles');

        return view('superadmin/log/log_roles')->with('log_roles', $log_roles);
    }

    public function siswalog()
    {
        // Fetch $guruData from your database or any source
        $log_siswa = DB::select('SELECT * FROM log_siswa');

        return view('superadmin/log/log_siswa')->with('log_siswa', $log_siswa);
    }

    public function kipkpspiplog()
    {
        // Fetch $guruData from your database or any source
        $log_status_kip_kps_pip = DB::select('SELECT * FROM log_kip_kps_pip');

        return view('superadmin/log/log_status_kip_kps_pip')->with('log_status_kip_kps_pip', $log_status_kip_kps_pip);
    }

    public function tatausahalog()
    {
        // Fetch $guruData from your database or any source
        $log_tata_usaha = DB::select('SELECT * FROM log_tata_usaha');

        return view('superadmin/log/log_tata_usaha')->with('log_tata_usaha', $log_tata_usaha);
    }

    public function walisiswalog()
    {
        // Fetch $guruData from your database or any source
        $log_wali_siswa = DB::select('SELECT * FROM log_wali_siswa');

        return view('superadmin/log/log_wali_siswa')->with('log_wali_siswa', $log_wali_siswa);
    }
}
