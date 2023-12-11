<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function index(){
        $id = Auth::user()->to_role;
        $data = DB::select('SELECT * FROM guruses Where NUPTK = ?', [$id]);
        
        return view('guru.dashboardguru', compact('data'));
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
