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
        $log_absensi_ekskul = DB::select('SELECT * FROM log_absensi_ekskuls');

        return view('superadmin/log/log_absensi_ekskul', compact('log_absensi_ekskul'));
    }

    public function absen_kelas()
    {
        // Fetch $guruData from your database or any source
        $log_absensi_kelas = DB::select('SELECT * FROM log_absensi_kelas');

        return view('superadmin/log/log_absensi_kelas', compact('log_absensi_kelas'));
    }

    public function ekskul_siswa()
    {
        // Fetch $guruData from your database or any source
        $log_ekskul_siswa = DB::select('SELECT * FROM log_ekskul_siswas');

        return view('superadmin/log/log_ekskul_siswa', compact('log_ekskul_siswa'));
    }

    public function ekskul()
    {
        // Fetch $guruData from your database or any source
        $log_ekstrakurikuler = DB::select('SELECT * FROM log_ekstrakurikulers');

        return view('superadmin/log/log_ekskul', compact('log_ekstrakurikuler'));
    }
    
    public function guru()
    {
        // Fetch $guruData from your database or any source
        $log_guru = DB::select('SELECT * FROM log_gurus');

        return view('superadmin/log/log_guru', compact('log_guru'));
    }

    public function kelas_log()
    {
        // Fetch $guruData from your database or any source
        $log_kelas = DB::select('SELECT * FROM log_kelas');

        return view('superadmin/log/log_kelas', compact('log_kelas'));
    }

    public function jadwalmapel()
    {
        // Fetch $guruData from your database or any source
        $log_jadwal_mapel = DB::select('SELECT * FROM log_jadwal_mapels');

        return view('superadmin/log/log_jadwal_mapel', compact('log_jadwal_mapel'));
    }

    public function kepsek_log()
    {
        // Fetch $guruData from your database or any source
        $log_kepala_sekolah = DB::select('SELECT * FROM log_kepala_sekolahs');

        return view('superadmin/log/log_kepala_sekolah', compact('log_kepala_sekolah'));
    }

    public function mapel_log()
    {
        // Fetch $guruData from your database or any source
        $log_mata_pelajaran = DB::select('SELECT * FROM log_mata_pelajarans');

        return view('superadmin/log/log_mata_pelajaran', compact('log_mata_pelajaran'));
    }

    public function nilai_ekskul_log()
    {
        // Fetch $guruData from your database or any source
        $log_nilai_ekskul = DB::select('SELECT * FROM log_nilai_ekskuls');

        return view('superadmin/log/log_nilai_ekskul', compact('log_nilai_ekskul'));
    }

    public function nilai_log()
    {
        // Fetch $guruData from your database or any source
        $log_nilai = DB::select('SELECT * FROM log_nilais');

        return view('superadmin/log/log_nilai', compact('log_nilai'));
    }

    public function prestasi_log()
    {
        // Fetch $guruData from your database or any source
        $log_prestasi = DB::select('SELECT * FROM log_prestasis');

        return view('superadmin/log/log_prestasi', compact('log_prestasi'));
    }

    public function rapor_log()
    {
        // Fetch $guruData from your database or any source
        $log_rapor = DB::select('SELECT * FROM log_rapors');

        return view('superadmin/log/log_rapor', compact('log_rapor'));
    }

    public function role_assign_log()
    {
        // Fetch $guruData from your database or any source
        $log_role_assignment = DB::select('SELECT * FROM log_role_assignments');

        return view('superadmin/log/log_role_assignment', compact('log_role_assignment'));
    }

    public function roles_log()
    {
        // Fetch $guruData from your database or any source
        $log_roles = DB::select('SELECT * FROM log_roles');

        return view('superadmin/log/log_roles', compact('log_roles'));
    }

    public function siswalog()
    {
        // Fetch $guruData from your database or any source
        $log_siswa = DB::select('SELECT * FROM log_siswas');

        return view('superadmin/log/log_siswa', compact('log_siswa'));
    }

    public function kipkpspiplog()
    {
        // Fetch $guruData from your database or any source
        $log_status_kip_kps_pip = DB::select('SELECT * FROM log_kip_kps_pips');

        return view('superadmin/log/log_status_kip_kps_pip', compact('log_status_kip_kps_pip'));
    }

    public function tatausahalog()
    {
        // Fetch $guruData from your database or any source
        $log_tata_usaha = DB::select('SELECT * FROM log_tata_usahas');

        return view('superadmin/log/log_tata_usaha', compact('log_tata_usaha'));
    }

    public function walisiswalog()
    {
        // Fetch $guruData from your database or any source
        $log_wali_siswa = DB::select('SELECT * FROM log_wali_siswas');

        return view('superadmin/log/log_wali_siswa', compact('log_wali_siswa'));
    }
}
