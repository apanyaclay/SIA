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
        $siswa = DB::select('SELECT * FROM siswas WHERE NISN = ?', [Auth::user()->to_role]);
        $kode = $siswa[0]->Kelas;
        $kelas = DB::select('SELECT Nama_Kelas FROM kelas WHERE ID_Kelas=?', [$kode]);
        $jam = DB::table('jadwal_mapels')
            ->select('jadwal_mapels.Waktu_Mulai', 'jadwal_mapels.Waktu_Selesai')
            ->groupBy('jadwal_mapels.Waktu_Mulai', 'jadwal_mapels.Waktu_Selesai')
            ->get();
        $senin = DB::table('jadwal_mapels')
        ->join('kelas', 'kelas.ID_Kelas', 'jadwal_mapels.KELAS_ID')
        ->join('mata_pelajarans', 'mata_pelajarans.Kode_Mapel', 'jadwal_mapels.Kode_Mapel')
        ->join('tahun_ajarans', 'tahun_ajarans.ID_Thn_Ajaran', 'jadwal_mapels.Thn_Ajaran_ID')
        ->where('jadwal_mapels.Kelas_ID', $kode)
        ->where('jadwal_mapels.Hari', 'Senin')
        ->select('jadwal_mapels.*', 'kelas.*', 'mata_pelajarans.*', 'tahun_ajarans.*')
        ->get();

        $selasa = DB::table('jadwal_mapels')
        ->join('kelas', 'kelas.ID_Kelas', 'jadwal_mapels.KELAS_ID')
        ->join('mata_pelajarans', 'mata_pelajarans.Kode_Mapel', 'jadwal_mapels.Kode_Mapel')
        ->join('tahun_ajarans', 'tahun_ajarans.ID_Thn_Ajaran', 'jadwal_mapels.Thn_Ajaran_ID')
        ->where('jadwal_mapels.Kelas_ID', $kode)
        ->where('jadwal_mapels.Hari', 'Selasa')
        ->select('jadwal_mapels.*', 'kelas.*', 'mata_pelajarans.*', 'tahun_ajarans.*')
        ->get();

        $rabu = DB::table('jadwal_mapels')
        ->join('kelas', 'kelas.ID_Kelas', 'jadwal_mapels.KELAS_ID')
        ->join('mata_pelajarans', 'mata_pelajarans.Kode_Mapel', 'jadwal_mapels.Kode_Mapel')
        ->join('tahun_ajarans', 'tahun_ajarans.ID_Thn_Ajaran', 'jadwal_mapels.Thn_Ajaran_ID')
        ->where('jadwal_mapels.Kelas_ID', $kode)
        ->where('jadwal_mapels.Hari', 'Rabu')
        ->select('jadwal_mapels.*', 'kelas.*', 'mata_pelajarans.*', 'tahun_ajarans.*')
        ->get();

        $kamis = DB::table('jadwal_mapels')
        ->join('kelas', 'kelas.ID_Kelas', 'jadwal_mapels.KELAS_ID')
        ->join('mata_pelajarans', 'mata_pelajarans.Kode_Mapel', 'jadwal_mapels.Kode_Mapel')
        ->join('tahun_ajarans', 'tahun_ajarans.ID_Thn_Ajaran', 'jadwal_mapels.Thn_Ajaran_ID')
        ->where('jadwal_mapels.Kelas_ID', $kode)
        ->where('jadwal_mapels.Hari', 'Kamis')
        ->select('jadwal_mapels.*', 'kelas.*', 'mata_pelajarans.*', 'tahun_ajarans.*')
        ->get();

        $jumat = DB::table('jadwal_mapels')
        ->join('kelas', 'kelas.ID_Kelas', 'jadwal_mapels.KELAS_ID')
        ->join('mata_pelajarans', 'mata_pelajarans.Kode_Mapel', 'jadwal_mapels.Kode_Mapel')
        ->join('tahun_ajarans', 'tahun_ajarans.ID_Thn_Ajaran', 'jadwal_mapels.Thn_Ajaran_ID')
        ->where('jadwal_mapels.Kelas_ID', $kode)
        ->where('jadwal_mapels.Hari', 'Jumat')
        ->select('jadwal_mapels.*', 'kelas.*', 'mata_pelajarans.*', 'tahun_ajarans.*')
        ->get();

        $sabtu = DB::table('jadwal_mapels')
        ->join('kelas', 'kelas.ID_Kelas', 'jadwal_mapels.KELAS_ID')
        ->join('mata_pelajarans', 'mata_pelajarans.Kode_Mapel', 'jadwal_mapels.Kode_Mapel')
        ->join('tahun_ajarans', 'tahun_ajarans.ID_Thn_Ajaran', 'jadwal_mapels.Thn_Ajaran_ID')
        ->where('jadwal_mapels.Kelas_ID', $kode)
        ->where('jadwal_mapels.Hari', 'Sabtu')
        ->select('jadwal_mapels.*', 'kelas.*', 'mata_pelajarans.*', 'tahun_ajarans.*')
        ->get();
        return view('siswa.jadwalsiswa' , compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'jam', 'kelas'));
    }

    public function profile () {
        $siswa = DB::select('SELECT * FROM siswas WHERE NISN =?', [Auth::user()->to_role]);

        return view('siswa.profilelengkapsiswa', compact('siswa'));
    }

    public function editprofile () {
        $data = DB::select('SELECT * from siswas WHERE NISN = ?', [Auth::user()->to_role]);
        return view('siswa.editprofilesiswa', compact('data'));
    }

    public function editprofilePost (Request $request) {
        $data = $request->validate([
            'nama' => 'required',
            'nis' => 'required',
            'tempat' => 'required',
            'tanggal' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'sk' => 'required',
            'ak' => 'required',
            'ap' => 'required',
            'tl' => 'required',
            'sa' => 'required',
            'nay' => 'required',
            'nib' => 'required',
            'aot' => 'required',
            'ntr' => 'required',
            'payah' => 'required',
            'pibuh' => 'required',
        ]);

        if ($data) {
            DB::table('siswas')->where(['NISN' => $request->nis])->update([
                'Nama_Siswa' => $request->nama,
                'Jenis_Kelamin' => $request->jk,
                'Tempat_Lahir' => $request->tempat,
                'Tanggal_Lahir' => $request->tanggal,
                'Agama' => $request->agama,
                'Alamat' => $request->ap,
                'No_hp' => $request->tl,
                'Status_dlm_Klrg' => $request->sk,
                'Nama_Ayah' => $request->nay,
                'Nama_Ibu' => $request->nib,
                'Pekerjaan_Ayah' => $request->payah,
                'Pekerjaan_Ibu' => $request->payah,
                'Sekolah_Asal' => $request->sa,
                'Anak_Ke' => $request->ak,
            ]);
            toast('Your Data as been submited!','success');
            return redirect('/siswa/profile');
        } else {
            toast('Your Data as failed submited!','error');
            return redirect()->back();
        }
    }

    public function rapor () {
        $kode = Auth::user()->to_role;
        $prestasi = DB::select('SELECT * FROM prestasis WHERE Siswa = ?', [$kode]);
        $rapor = DB::select('SELECT * FROM rapors WHERE Siswa_ID = ?', [$kode]);
        $ekskul = DB::table('ekskul_siswas')
            ->join('ekstrakurikulers', 'ekstrakurikulers.Kode_Ekskul', 'ekskul_siswas.Ekskul_Kode')
            ->join('nilai_ekskuls', 'nilai_ekskuls.ID_Ekskul_Siswa', 'ekskul_siswas.ID_Ekskul_Siswa')
            ->where('ekskul_siswas.Siswa_ID', $kode)
            ->select('ekskul_siswas.*', 'ekstrakurikulers.*', 'nilai_ekskuls.*')
            ->get();
        
        $nilai =  DB::table('nilais')
        ->join('mata_pelajarans', 'mata_pelajarans.Kode_Mapel', 'nilais.Kode_Mapel')
        ->where('nilais.Siswa_ID', $kode)
        ->where('nilais.Jenis', 'UAS')
        ->select('nilais.*', 'mata_pelajarans.*')
        ->get();
        return view('siswa.raporsiswa', compact('ekskul', 'prestasi', 'nilai', 'rapor'));
    }
}
