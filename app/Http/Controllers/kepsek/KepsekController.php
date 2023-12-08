<?php

namespace App\Http\Controllers\kepsek;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade

class KepsekController extends Controller
{
    public function index () {
        return view('superadmin.dashboardsuperadmin');
    }

    public function daftarkelassiswa () {
        return view('superadmin.manajemenuser.daftarkelassiswa-superadminMU');
    }

    public function tambahkelas () {
        return view('superadmin.manajemenuser.tambahkelas-superadminMU');
    }

    public function listsiswa () {
        $absensi_kelas = DB::select('SELECT * FROM absensi_kelas');

        return view('superadmin.manajemenuser.listsiswa-superadminMU', compact('absensi_kelas'));
    }

    public function tambahsiswa () {
        return view('superadmin.manajemenuser.tambahsiswa-superadminMU');
    }

    public function detailsiswa ($nisn) {
        $siswas = DB::select('SELECT * FROM siswas WHERE NISN= ?',[$nisn]);

        return view('superadmin.manajemenuser.detailsiswa-superadminMU', compact('siswas'));
    }

    public function daftarptk () {
        $ptk = DB::select('SELECT * FROM guruses');

        return view('superadmin.manajemenuser.daftarptk-superadminMU', compact('ptk'));
    }

    public function tambahptk () {
        return view('superadmin.manajemenuser.tambahptk-superadminMU');
    }

    public function detailptk () {
        $ptk = DB::select('SELECT * FROM guruses');

        return view('superadmin.manajemenuser.detailptk-superadminMU', compact('ptk'));
    }

    public function daftartu () {
        $tu = DB::select('SELECT * FROM tata_usahas');

        return view('superadmin.manajemenuser.daftartu-superadminMU', compact('tu'));
    }

    public function tambahtu () {
        return view('superadmin.manajemenuser.tambahtu-superadminMU');
    }

    public function detailtu () {
        $tu = DB::select('SELECT * FROM tata_usahas');
        
        return view('superadmin.manajemenuser.detailtu-superadminMU', compact('tu'));
    }

    public function listraporsiswa () {
        return view('superadmin/listraporsiswa-superadmin');
    }

    public function listsiswaNS () {
        return view('superadmin/listsiswa-superadminNS');
    }

    public function editraporsiswa () {
        return view('superadmin/editraporsiswa-superadmin');
    }

    public function daftarkelasMP () {
        return view('superadmin/daftarkelas-superadminMP');
    }

    public function daftarmapel () {
        return view('superadmin/daftarmapel-superadminMP');
    }

    public function tambahmapel () {
        return view('superadmin/tambahmapel-superadmin');
    }

    public function daftarkelasJS () {
        return view('superadmin/daftarkelas-superadminJS');
    }

    public function jadwalsiswa () {
        return view('superadmin/jadwalsiswa-superadmin');
    }

    public function daftarkelasVR () {
        return view('superadmin/daftarkelas-superadminVR');
    }

    public function listsiswaVR () {
        return view('superadmin/listsiswa-superadminVR');
    }

    public function raporsiswa () {
        return view('superadmin/raporsiswa-superadmin');
    }

    public function daftarekskul () {
        $ekstrakurikuler = DB::select('SELECT * FROM ekstrakurikulers');

        return view('superadmin/daftarekskul-superadmin', compact('ekstrakurikuler'));
    }

    public function tambahekskul () {
        return view('superadmin/tambahekskul-superadmin');
    }

    public function daftarekskulsiswa () {
        return view('superadmin/daftarekskulsiswa-superadmin');
    }

    public function audit () {
        return view('superadmin/audit-superadmin');
    }

    public function profile () {
        $kepala_sekolah = DB::select('SELECT * FROM kepala_sekolahs');
        
        return view('superadmin/profile-superadmin', compact('kepala_sekolah'));
    }

    public function editprofile () {
        return view('superadmin/editprofile-superadmin');
    }
}
