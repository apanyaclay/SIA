<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade
class ptk extends Controller
{
    public function index()
    {
        // Fetch $guruData from your database or any source
        $ptk = DB::select('SELECT * FROM guru');

        return view('superadmin/manajemenuser/daftarptk-superadminMU')->with('ptk', $ptk);
    }

    public function listtu()
    {
        // Fetch $guruData from your database or any source
        $tu = DB::select('SELECT * FROM tata_usaha');

        return view('superadmin/manajemenuser/daftartu-superadminMU')->with('tu', $tu);
    }

    public function ptkdetail()
    {
        // Fetch $guruData from your database or any source
        $ptk = DB::select('SELECT * FROM guru');

        return view('superadmin/manajemenuser/detailptk-superadminMU')->with('ptk', $ptk);
    }

    public function tudetail()
    {
        // Fetch $guruData from your database or any source
        $tu = DB::select('SELECT * FROM tata_usaha');

        return view('superadmin/manajemenuser/detailtu-superadminMU')->with('tu', $tu);
    }
    
    public function dashkepsek()
    {
        // Fetch $guruData from your database or any source
        $kepala_sekolah = DB::select('SELECT * FROM kepala_sekolah');

        return view('superadmin/dashboardsuperadmin')->with('kepala_sekolah', $kepala_sekolah);
    }


    public function kepsek()
    {
        // Fetch $guruData from your database or any source
        $kepala_sekolah = DB::select('SELECT * FROM kepala_sekolah');

        return view('superadmin/profile-superadmin')->with('kepala_sekolah', $kepala_sekolah);
    }

}
