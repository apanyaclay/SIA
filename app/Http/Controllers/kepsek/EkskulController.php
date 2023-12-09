<?php

namespace App\Http\Controllers\kepsek;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade

class EkskulController extends Controller
{
    public function daftarekskul () {
        $ekstrakurikuler = DB::select('SELECT * FROM ekstrakurikulers');

        return view('superadmin/daftarekskul-superadmin', compact('ekstrakurikuler'));
    }

    public function tambahekskul () {
        $data = DB::select('SELECT * from guruses');
        return view('superadmin/tambahekskul-superadmin', compact('data'));
    }

    public function tambahekskulPost (Request $request) {
        $data = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'guru' => 'required',
            'hari' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
        ]);

        if ($data) {
            DB::table('ekstrakurikulers')->insert([
                'Kode_Ekskul' => $request->kode,
                'Nama_Ekskul' => $request->nama,
                'Guru_Ekskul' => $request->guru,
                'Hari' => $request->hari,
                'Waktu_Mulai' => $request->mulai,
                'Waktu_Selesai' => $request->selesai,
            ]);
            toast('Your Data as been submited!','success');
            return redirect('/superadmin/daftarekskul');
        } else {
            toast('Your Data as failed submited!','error');
            return redirect()->back();
        }
    }

    public function editekskul ($kode) {
        $data = DB::select('SELECT * from guruses');
        $ekskul = DB::select('SELECT * from ekstrakurikulers WHERE Kode_Ekskul = ?', [$kode]);
        return view('superadmin/editekskul-superadmin', compact('data', 'ekskul'));
    }

    public function editekskulPost (Request $request) {
        $data = $request->validate([
            'nama' => 'required',
            'guru' => 'required',
            'hari' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
        ]);

        if ($data) {
            DB::table('ekstrakurikulers')->where(['Kode_Ekskul' => $request->kode])->update([
                'Nama_Ekskul' => $request->nama,
                'Guru_Ekskul' => $request->guru,
                'Hari' => $request->hari,
                'Waktu_Mulai' => $request->mulai,
                'Waktu_Selesai' => $request->selesai,
            ]);
            toast('Your Data as been submited!','success');
            return redirect('/superadmin/daftarekskul');
        } else {
            toast('Your Data as failed submited!','error');
            return redirect()->back();
        }
    }

    public function deleteekskul($kode){
        DB::table('ekstrakurikulers')->where(["Kode_Ekskul" => $kode])->delete();
        toast('Your Data as been deleted!','success');
        return redirect()->back();
    }

    public function daftarekskulsiswa () {
        $hasil = DB::table('ekskul_siswas')
            ->join('siswas', 'ekskul_siswas.Siswa_ID', '=', 'siswas.NISN')
            ->join('ekstrakurikulers', 'ekskul_siswas.Ekskul_Kode', '=', 'ekstrakurikulers.Kode_Ekskul')
            ->join('tahun_ajarans', 'ekskul_siswas.Thn_Ajaran', '=', 'tahun_ajarans.ID_Thn_Ajaran')
            ->select('ekskul_siswas.*', 'siswas.Nama_Siswa AS Nama_Siswa', 'ekstrakurikulers.Nama_Ekskul AS Nama_Ekskul', 'tahun_ajarans.*')
            ->get();

        return view('superadmin/daftarekskulsiswa-superadmin', compact('hasil'));
    }

    public function editekskulsiswa ($kode) {
        $hasil = DB::table('ekskul_siswas')
            ->join('siswas', 'ekskul_siswas.Siswa_ID', '=', 'siswas.NISN')
            ->join('ekstrakurikulers', 'ekskul_siswas.Ekskul_Kode', '=', 'ekstrakurikulers.Kode_Ekskul')
            ->join('tahun_ajarans', 'ekskul_siswas.Thn_Ajaran', '=', 'tahun_ajarans.ID_Thn_Ajaran')
            ->where('ekskul_siswas.ID_Ekskul_Siswa', $kode)
            ->select('ekskul_siswas.*', 'siswas.Nama_Siswa AS Nama_Siswa', 'ekstrakurikulers.Nama_Ekskul AS Nama_Ekskul', 'tahun_ajarans.*')
            ->get();
        $data = DB::select('SELECT * from ekstrakurikulers');
        $tahun = DB::select('SELECT * from tahun_ajarans');
        return view('superadmin/editekskulsiswa-superadmin', compact('hasil', 'data', 'tahun'));
    }

    public function editekskulsiswaPost (Request $request) {
        $data = $request->validate([
            'ekskul' => 'required',
            'tahun' => 'required',
        ]);

        if ($data) {
            DB::table('ekskul_siswas')->where(['ID_Ekskul_Siswa' => $request->kode])->update([
                'Ekskul_Kode' => $request->ekskul,
                'Thn_Ajaran' => $request->tahun,
            ]);
            toast('Your Data as been submited!','success');
            return redirect('/superadmin/daftarekskulsiswa');
        } else {
            toast('Your Data as failed submited!','error');
            return redirect()->back();
        }
    }
}
