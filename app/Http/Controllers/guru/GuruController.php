<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){
        return view('guru.dashboardguru');
    }

    public function jadwalmengajar() {
        return view('guru.jadwalmengajarguru');
    }

    public function raporsiswa() {
        return view('guru.raporsiswaguru');
    }

    public function listsiswa() {
        return view('guru.listsiswaguru');
    }

    public function tambahnilai() {
        return view('guru.tambahnilaiguru');
    }

    public function profilelengkap() {
        return view('guru.profilelengkapguru');
    }

    public function editprofile() {
        return view('guru.editprofileguru');
    }
}
