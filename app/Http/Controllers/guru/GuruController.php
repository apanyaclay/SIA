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
        $layout = $data[0]->Jenis_PTK;
        
        return view('guru.dashboardguru', compact('data', 'layout'));
    }

    public function jadwalmengajar() {
        $id = Auth::user()->to_role;
        $mapel = DB::select('SELECT * FROM mata_pelajarans WHERE Guru_Mapel = ?', [$id]);
        if (count($mapel) !=0) {
            $data = DB::table('jadwal_mapels')
                ->join('kelas', 'kelas.ID_Kelas', 'jadwal_mapels.Kelas_ID')
                ->join('mata_pelajarans', 'mata_pelajarans.Kode_Mapel', 'jadwal_mapels.Kode_Mapel')
                ->where('jadwal_mapels.Kode_Mapel', $mapel[0]->Kode_Mapel)
                ->orderBy('jadwal_mapels.Hari')
                ->select('jadwal_mapels.*', 'kelas.*', 'mata_pelajarans.*')
                ->get();
        } else {
            $data = [];
        }
        return view('guru.jadwalmengajarguru', compact('data'));
    }

    public function raporsiswa() {
        $id = Auth::user()->to_role;
        $data = DB::select('SELECT * FROM kelas WHERE Wali_Kelas = ?', [$id]);
        return view('guru.raporsiswaguru', compact('data'));
    }

    public function daftarkelas() {
        $id = Auth::user()->to_role;
        $mapel = DB::select('SELECT * FROM mata_pelajarans WHERE Guru_Mapel = ?', [$id]);
        if (count($mapel) !=0) {
            $data = DB::table('jadwal_mapels')
                ->join('kelas', 'kelas.ID_Kelas', 'jadwal_mapels.Kelas_ID')
                ->join('mata_pelajarans', 'mata_pelajarans.Kode_Mapel', 'jadwal_mapels.Kode_Mapel')
                ->where('jadwal_mapels.Kode_Mapel', $mapel[0]->Kode_Mapel)
                ->groupBy('jadwal_mapels.Kelas_ID','kelas.Nama_Kelas')
                ->select('jadwal_mapels.Kelas_ID','kelas.Nama_Kelas')
                ->get();
        } else {
            $data = [];
        }
        return view('guru.daftarkelas', compact('data'));
    }

    public function listsiswa($kode) {
        $kelas = DB::select('SELECT * FROM kelas WHERE ID_Kelas = ?', [$kode]);
        $data = DB::select('SELECT * FROM siswas WHERE Kelas = ?', [$kode]);
        return view('guru.listsiswaguru', compact('data', 'kelas'));
    }

    public function listsiswas($kode) {
        $kelas = DB::select('SELECT * FROM kelas WHERE ID_Kelas = ?', [$kode]);
        $data = DB::select('SELECT * FROM siswas WHERE Kelas = ?', [$kode]);
        return view('guru.listsiswa', compact('data', 'kelas'));
    }

    public function raporsiswas ($kode) {
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
        
        return view('guru.raporsiswa', compact('ekskul', 'prestasi', 'nilai', 'rapor'));
    }

    public function editraporsiswa($kode) {
        $rapor = DB::select('SELECT * FROM rapors WHERE Siswa_ID = ?', [$kode]);

        return view('guru.editraporsiswa', compact('kode', 'rapor'));
    }

    public function editraporsiswaPost(Request $request) {
        $data = $request->validate([
            'id' => 'required',
            'nis' => 'required',
            'sk_spr'=> 'required',
            'des_spr'=> 'required',
            'sk_sos'=> 'required',
            'des_sos'=> 'required',
        ]);
        if ($data) {
            DB::table('rapors')->where('ID_Rapor', $request->id)->update([
                'Sikap_Spiritual' => $request->sk_spr,
                'Deskrip_Spiritual' => $request->des_spr,
                'Sikap_Sosial' => $request->sk_sos,
                'Deskrip_Sosial' => $request->des_sos,
            ]);
            toast('Your data as been sumbit','success');
            return redirect('/guru/raporsiswa');
        } else {
            toast('Your data as failed sumbit','error');
            return redirect()->back();
        }
    }

    public function listnilaisiswa($kode){
        $siswa = DB::select('SELECT * FROM siswas WHERE NISN = ?', [$kode]);
        $data = DB::table('nilais')
            ->join('mata_pelajarans', 'mata_pelajarans.Kode_Mapel', 'nilais.Kode_Mapel')
            ->join('tahun_ajarans', 'tahun_ajarans.ID_Thn_Ajaran', 'nilais.Thn_Ajaran')
            ->where('nilais.Siswa_ID', $kode)
            ->select('nilais.*', 'mata_pelajarans.*', 'tahun_ajarans.Thn_Ajaran', 'tahun_ajarans.Semester')
            ->get();
        return view('guru.listnilaisiswa', compact('data', 'siswa'));

    }

    public function tambahnilai($kode) {
        $id = Auth::user()->to_role;
        $mapel = DB::select('SELECT * FROM mata_pelajarans WHERE Guru_Mapel = ?', [$id]);
        $ta = DB::select('SELECT * FROM tahun_ajarans');

        return view('guru.tambahnilaiguru', compact('kode', 'mapel', 'ta'));
    }

    public function tambahnilaiPost(Request $request) {
        $data = $request->validate([
            'nis'=> 'required',
            'kode'=> 'required',
            'ta'=> 'required',
            'jenis'=> 'required',
            'np'=> 'required',
            'nk'=> 'required',
        ]);
        if ($data) {
            DB::table('nilais')->insert([
                'Kode_Mapel' => $request->kode,
                'Siswa_ID' => $request->nis,
                'Thn_Ajaran' => $request->ta,
                'Jenis' => $request->jenis,
                'Nilai_Pengetahuan' => $request->np,
                'Nilai_Keterampilan' => $request->nk,
            ]);
            toast('Your data as been sumbit','success');
            return redirect('/guru/daftarkelas');
        } else {
            toast('Your data as failed sumbit','error');
            return redirect()->back();
        }
    }

    public function editnilai($kode) {
        $nilai = DB::select('SELECT * FROM nilais WHERE Nilai_ID = ?', [$kode]);

        return view('guru.editnilaiguru', compact('kode', 'nilai'));
    }

    public function editnilaiPost(Request $request) {
        $data = $request->validate([
            'id' => 'required',
            'jenis'=> 'required',
            'np'=> 'required',
            'nk'=> 'required',
        ]);
        if ($data) {
            DB::table('nilais')->where('Nilai_ID', $request->id)->update([
                'Jenis' => $request->jenis,
                'Nilai_Pengetahuan' => $request->np,
                'Nilai_Keterampilan' => $request->nk,
            ]);
            toast('Your data as been sumbit','success');
            return redirect('/guru/daftarkelas');
        } else {
            toast('Your data as failed sumbit','error');
            return redirect()->back();
        }
    }

    public function profilelengkap() {
        $data = DB::select('SELECT * from guruses WHERE NUPTK = ?', [Auth::user()->to_role]);
        return view('guru.profilelengkapguru', compact('data'));
    }

    public function editprofile() {
        $data = DB::select('SELECT * from guruses WHERE NUPTK = ?', [Auth::user()->to_role]);
        return view('guru.editprofileguru', compact('data'));
    }


    public function editprofilePost (Request $request) {
        $data = $request->validate([
            'nama' => 'required',
            'nuptk' => 'required',
            'nip' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
            'sk' => 'required',
            'ptk' => 'required',
            'jenjang' => 'required',
            'tmt_kerja' => 'required',
            'jjm' => 'required',
            'status' => 'required',
        ]);

        if ($data) {
            DB::table('guruses')->where(['NUPTK' => $request->nuptk])->update([
                'Nama_Guru' => $request->nama,
                'NIP' => $request->nip,
                'Jenis_Kelamin' => $request->jk,
                'Tempat_Lahir' => $request->tempat_lahir,
                'Tanggal_Lahir' => $request->tanggal_lahir,
                'Status_Kepegawaian' => $request->sk,
                'Jenis_PTK' => $request->ptk,
                'Jenjang_Pendidikan' => $request->jenjang,
                'TMT_Kerja' => $request->tmt_kerja,
                'JJM' => $request->jjm,
                'Status' => $request->status,
            ]);
            toast('Your Data as been submited!','success');
            return redirect('/guru/profilelengkap');
        } else {
            toast('Your Data as failed submited!','error');
            return redirect()->back();
        }
    }


}
