<?php

namespace App\Http\Controllers\siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index () {
        return view('siswa.dashboardsiswa');
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
