<?php

namespace App\Http\Controllers\kepsek;

use Alert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; // Import the DB facade
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile () {
        $kepala_sekolah = DB::select('SELECT * FROM kepala_sekolahs WHERE ID_Kepsek = ?', [Auth::user()->to_role]);
        
        return view('superadmin/profile-superadmin', compact('kepala_sekolah'));
    }

    public function editprofile () {
        $kepala_sekolah = DB::select('SELECT * FROM kepala_sekolahs WHERE ID_Kepsek = ?', [Auth::user()->to_role]);

        return view('superadmin/editprofile-superadmin', compact('kepala_sekolah'));
    }

    public function editprofilePost (Request $request) {
        $data = $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tmt_kerja' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenjang_pendidikan' => 'required',
            'status' => 'required'
            ]);
        if ($data) {
            $result = DB::update('UPDATE kepala_sekolahs set Nama_Kepsek = ?, Jenjang_Pendidikan = ?, Jenis_Kelamin = ?, Tempat_Lahir = ?, Tanggal_Lahir = ?, TMT_Kerja = ?, Status = ? WHERE ID_Kepsek = ?', [$request->nama, $request->jenjang_pendidikan, $request->jenis_kelamin, $request->tempat_lahir, $request->tanggal_lahir, $request->tmt_kerja, $request->status, Auth::user()->to_role]);
            toast('Your data as been update!','success');
            return redirect('/superadmin/profile');
        } else {
            toast('Your data failed update!','error');
            return redirect()->back();
        }
        
    }
}
