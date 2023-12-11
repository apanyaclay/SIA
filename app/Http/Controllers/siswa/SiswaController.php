<?php

namespace App\Http\Controllers\siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index () {
        $id = Auth::user()->to_role;
        $data = DB::select('SELECT * FROM siswas Where NISN = ?', [$id]);
        
        return view('siswa.dashboardsiswa',compact('data'));
    }

    public function jadwal () {
        return view('siswa.jadwalsiswa');
    }

    public function profile () {
        return view('siswa.profilelengkapsiswa');
    }

    public function editprofile () {
        return view('siswa.editprofilesiswa');
    }

    public function rapor () {
        return view('siswa.raporsiswa');
    }
}
