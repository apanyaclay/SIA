<?php

namespace App\Http\Controllers\kepsek;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KepsekController extends Controller
{
    public function index () {
        $id = Auth::user()->to_role;
        $data = DB::select('SELECT * FROM kepala_sekolahs WHERE ID_Kepsek = ?', [$id]);
        return view('superadmin.dashboardsuperadmin', compact('data'));
    }

    public function daftarkelassiswa () {
        $kelas = DB::select('SELECT * FROM kelas');


        return view('superadmin.manajemenuser.daftarkelassiswa-superadminMU', compact('kelas'));
    }

    public function tambahkelas () {
        $data = DB::select('SELECT * FROM guruses');
        return view('superadmin.manajemenuser.tambahkelas-superadminMU', compact('data'));
    }

    public function tambahkelasPost (Request $request) {
        $data = $request->validate([
            'id_kelas' => 'required',
            'wali_kelas' => 'required',
            'nama_kelas' => 'required',
            'tingkatan_kelas' => 'required',
            'kelompok_kelas' => 'req    uired',
        ]);

        if ($data) {
            DB::table('kelas')->insert([
                'ID_Kelas' => $request->id_kelas,
                'Wali_Kelas' => $request->wali_kelas,
                'Nama_Kelas' => $request->nama_kelas,
                'Tingkatan' => $request->tingkatan_kelas,
                'Kelompok_Kelas' => $request->kelompok_kelas,
            ]);
            toast('Your Data as been submited!','success');
            return redirect('/superadmin/daftarkelassiswa');
        } else {
            toast('Your Data as failed submited!','error');
            return redirect()->back();
        }
    }

    public function listsiswa ($kode) {
        $siswa = DB::select('SELECT * FROM siswas WHERE Kelas = ?', [$kode]);

        return view('superadmin.manajemenuser.listsiswa-superadminMU', compact('siswa', 'kode'));
    }

    public function editsiswa ($kode) {
        $data = DB::select('SELECT * from siswas WHERE NISN = ?', [$kode]);
        return view('superadmin.manajemenuser.editsiswa-superadminMU', compact('data'));
    }

    public function editsiswaPost (Request $request) {
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
            'status' => 'required'
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
                'Status_Siswa' => $request->status,
                'Sekolah_Asal' => $request->sa,
                'Anak_Ke' => $request->ak,
            ]);
            toast('Your Data as been submited!','success');
            return redirect('/superadmin/daftarkelassiswa');
        } else {
            toast('Your Data as failed submited!','error');
            return redirect()->back();
        }
    }

    public function deletesiswa($kode){
        DB::table('siswas')->where(["NISN" => $kode])->delete();
        DB::table('users')->where('to_role', $kode)->delete();
        toast('Your Data as been deleted!','success');
        return redirect()->back();
    }

    public function tambahsiswa ($kode) {

        return view('superadmin.manajemenuser.tambahsiswa-superadminMU', compact('kode'));
    }

    public function tambahsiswaPost (Request $request) {
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
            'kelas' => 'required',
            'sa' => 'required',
            'nay' => 'required',
            'nib' => 'required',
            'aot' => 'required',
            'ntr' => 'required',
            'payah' => 'required',
            'pibuh' => 'required',
            'status' => 'required'
        ]);

        if ($data) {
            DB::table('siswas')->insert([
                'NISN' => $request->nis,
                'Nama_Siswa' => $request->nama,
                'Jenis_Kelamin' => $request->jk,
                'Tempat_Lahir' => $request->tempat,
                'Tanggal_Lahir' => $request->tanggal,
                'Agama' => $request->agama,
                'Alamat' => $request->ap,
                'No_hp' => $request->tl,
                'Kelas' => $request->kelas,
                'Status_dlm_Klrg' => $request->sk,
                'Nama_Ayah' => $request->nay,
                'Nama_Ibu' => $request->nib,
                'Pekerjaan_Ayah' => $request->payah,
                'Pekerjaan_Ibu' => $request->payah,
                'Status_Siswa' => $request->status,
                'Sekolah_Asal' => $request->sa,
                'Anak_Ke' => $request->ak,
            ]);
            DB::table('users')->insert([
                'name'=> 'siswa',
                'email'=> strtolower(strtok($request->nama, ' ')).'@gmail.com',
                'password'=> Hash::make('siswa'),
                'role'=> 'Siswa',
                'to_role'=> $request->nis,
            ]);
            toast('Your Data as been submited!','success');
            return redirect('/superadmin/daftarkelassiswa');
        } else {
            toast('Your Data as failed submited!','error');
            return redirect()->back();
        }
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

    public function tambahptkPost (Request $request) {
        $data = $request->validate([
            'id' => 'required',
            'ids' => 'required',
            'nama'=> 'required',
            'jk'=> 'required',
            'tempat'=> 'required',
            'tanggal'=> 'required',
            'tmp_kerja'=> 'required',
            'jp'=> 'required',
            'status'=> 'required',
            'jns_ptk'=> 'required',
            'jjm'=> 'required',
            'statusK'=> 'required',
        ]);
        if ($data) {
            DB::table('guruses')->insert([
                'NUPTK' => $request->id,
                'NIP' => $request->ids,
                'Nama_Guru' => $request->nama,
                'Jenis_Kelamin' => $request->jk,
                'TMT_Kerja' => $request->tmp_kerja,
                'Tempat_Lahir' => $request->tempat,
                'Tanggal_Lahir' => $request->tanggal,
                'Jenjang_Pendidikan' => $request->jp,
                'Status' => $request->status,
                'Status_Kepegawaian' => $request->statusK,
                'JJM' => $request->jjm,
                'Jenis_PTK' => $request->jns_ptk,
            ]);
            DB::table('users')->insert([
                'name'=> 'guru',
                'email'=> strtolower(strtok($request->nama, ' ')).'@gmail.com',
                'password'=> Hash::make('guru'),
                'role'=> 'Guru',
                'to_role'=> $request->id,
            ]);
            toast('Your data as been sumbit','success');
            return redirect('/superadmin/daftarptk');
        } else {
            toast('Your data as failed sumbit','error');
            return redirect()->back();
        }
    }

    public function editptk ($kode) {
        $data = DB::select('SELECT * FROM guruses WHERE NUPTK = ?', [$kode]);

        return view('superadmin.manajemenuser.editptk-superadminMU', compact('data'));
    }

    public function editptkPost (Request $request) {
        $data = $request->validate([
            'id' => 'required',
            'ids' => 'required',
            'nama'=> 'required',
            'jk'=> 'required',
            'tempat'=> 'required',
            'tanggal'=> 'required',
            'tmp_kerja'=> 'required',
            'jp'=> 'required',
            'status'=> 'required',
            'jns_ptk'=> 'required',
            'jjm'=> 'required',
            'statusK'=> 'required',
        ]);
        if ($data) {
            DB::table('guruses')->where(['NUPTK' => $request->id])->update([
                'NIP' => $request->ids,
                'Nama_Guru' => $request->nama,
                'Jenis_Kelamin' => $request->jk,
                'TMT_Kerja' => $request->tmp_kerja,
                'Tempat_Lahir' => $request->tempat,
                'Tanggal_Lahir' => $request->tanggal,
                'Jenjang_Pendidikan' => $request->jp,
                'Status' => $request->status,
                'Status_Kepegawaian' => $request->statusK,
                'JJM' => $request->jjm,
                'Jenis_PTK' => $request->jns_ptk,
            ]);
            toast('Your data as been sumbit','success');
            return redirect('/superadmin/daftarptk');
        } else {
            toast('Your data as failed sumbit','error');
            return redirect()->back();
        }
    }

    public function detailptk ($kode) {
        $ptk = DB::select('SELECT * FROM guruses WHERE NUPTK = ?', [$kode]);

        return view('superadmin.manajemenuser.detailptk-superadminMU', compact('ptk'));
    }

    public function deleteptk($kode){
        DB::table('guruses')->where('NUPTK', $kode)->delete();
        DB::table('users')->where('to_role', $kode)->delete();
        toast('Your data as been delete','success');
        return redirect()->back();
    }

    public function daftartu () {
        $tu = DB::select('SELECT * FROM tata_usahas');

        return view('superadmin.manajemenuser.daftartu-superadminMU', compact('tu'));
    }

    public function tambahtu () {
        return view('superadmin.manajemenuser.tambahtu-superadminMU');
    }

    public function tambahtuPost(Request $request){
        $data = $request->validate([
            'id' => 'required',
            'nama'=> 'required',
            'jk'=> 'required',
            'tempat'=> 'required',
            'tanggal'=> 'required',
            'tmp_kerja'=> 'required',
            'jp'=> 'required',
            'status'=> 'required',
        ]);
        if ($data) {
            DB::table('tata_usahas')->insert([
                'ID_Pegawai' => $request->id,
                'Nama_Pegawai' => $request->nama,
                'Jenis_Kelamin' => $request->jk,
                'TMT_Kerja' => $request->tmp_kerja,
                'Tempat_Lahir' => $request->tempat,
                'Tanggal_Lahir' => $request->tanggal,
                'Jenjang_Pendidikan' => $request->jp,
                'Status' => $request->status,
            ]);
            DB::table('users')->insert([
                'name'=> 'tatausaha',
                'email'=> strtolower(strtok($request->nama, ' ')).'@gmail.com',
                'password'=> Hash::make('tatausaha'),
                'role'=> 'Admin',
                'to_role'=> $request->id,
            ]);
            toast('Your data as been sumbit','success');
            return redirect('/superadmin/daftartu');
        } else {
            toast('Your data as failed sumbit','error');
            return redirect()->back();
        }
    }

    public function edittu ($kode) {
        $data = DB::select('SELECT * FROM tata_usahas WHERE ID_Pegawai = ?', [$kode]);

        return view('superadmin.manajemenuser.edittu-superadminMU', compact('data'));
    }

    public function edittuPost(Request $request){
        $data = $request->validate([
            'id' => 'required',
            'nama'=> 'required',
            'jk'=> 'required',
            'tempat'=> 'required',
            'tanggal'=> 'required',
            'tmp_kerja'=> 'required',
            'jp'=> 'required',
            'status'=> 'required',
        ]);
        if ($data) {
            DB::table('tata_usahas')->where('ID_Pegawai', $request->id)->update([
                'Nama_Pegawai' => $request->nama,
                'Jenis_Kelamin' => $request->jk,
                'TMT_Kerja' => $request->tmp_kerja,
                'Tempat_Lahir' => $request->tempat,
                'Tanggal_Lahir' => $request->tanggal,
                'Jenjang_Pendidikan' => $request->jp,
                'Status' => $request->status,
            ]);
            toast('Your data as been sumbit','success');
            return redirect('/superadmin/daftartu');
        } else {
            toast('Your data as failed sumbit','error');
            return redirect()->back();
        }
    }

    public function detailtu ($kode) {
        $tu = DB::select('SELECT * FROM tata_usahas WHERE ID_Pegawai = ?',[$kode]);
        
        return view('superadmin.manajemenuser.detailtu-superadminMU', compact('tu'));
    }

    public function deletetu($kode){
        DB::table('tata_usahas')->where('ID_Pegawai', $kode)->delete();
        DB::table('users')->where('to_role', $kode)->delete();
        toast('Your data as been delete','success');
        return redirect()->back();
    }

    public function listraporsiswa () {
        $hasil = DB::select('SELECT * FROM kelas');

        return view('superadmin/listraporsiswa-superadmin', compact('hasil'));
    }

    public function listsiswaNS ($kode) {
        $data = DB::select('SELECT * FROM siswas WHERE Kelas = ?', [$kode]);


        return view('superadmin/listsiswa-superadminNS', compact('data'));
    }

    public function listnilaisiswa($kode){
        $siswa = DB::select('SELECT * FROM siswas WHERE NISN = ?', [$kode]);
        $data = DB::table('nilais')
            ->join('mata_pelajarans', 'mata_pelajarans.Kode_Mapel', 'nilais.Kode_Mapel')
            ->join('tahun_ajarans', 'tahun_ajarans.ID_Thn_Ajaran', 'nilais.Thn_Ajaran')
            ->where('nilais.Siswa_ID', $kode)
            ->select('nilais.*', 'mata_pelajarans.*', 'tahun_ajarans.Thn_Ajaran', 'tahun_ajarans.Semester')
            ->get();
        return view('superadmin/listnilaisiswa-superadminNS', compact('data', 'siswa'));

    }

    public function editraporsiswa () {
        return view('superadmin/editraporsiswa-superadmin');
    }

    public function daftarkelasMP () {
        $hasil = DB::select('SELECT * FROM kelas');

        return view('superadmin/daftarkelas-superadminMP', compact('hasil'));
    }

    public function daftarmapel ($kode) {
        $kelas = DB::select('SELECT * FROM kelas WHERE ID_Kelas = ?', [$kode]);
        $hasil = DB::table('mata_pelajarans')
            ->join('guruses', 'guruses.NUPTK', 'mata_pelajarans.Guru_Mapel')
            ->select('mata_pelajarans.*', 'guruses.*')
            ->get();
        
        return view('superadmin/daftarmapel-superadminMP', compact('hasil', 'kelas'));
    }

    public function tambahmapel () {
        $hasil = DB::select('SELECT * FROM guruses');
        return view('superadmin/tambahmapel-superadmin', compact('hasil'));
    }

    public function tambahmapelPost(Request $request){
        $cek = $request->validate([
            'kode' => 'required',
            'name' => 'required',
            'kkm' => 'required',
            'guru' => 'required',
        ]);
        if ($cek) {
            DB::table('mata_pelajarans')->insert([
                'Kode_Mapel'    => $request->kode,
                'Nama_Mapel'    => $request->name,
                'KKM'           => $request->kkm,
                'Guru_Mapel'    => $request->guru,
            ]);
            toast('Your data as been insert!','success');
            return redirect('/superadmin/daftarmapel/SMP8A');
        } else {
            toast('Your data as failed insert!','error');
            return redirect()->back();
        }

    }

    public function deletemapel($kode){
        DB::table('mata_pelajarans')->where('Kode_Mapel', $kode)->delete();
        toast('Your data as been delete','success');
        return redirect()->back();
    }

    public function daftarkelasJS () {
        $hasil = DB::select('SELECT * FROM kelas');

        return view('superadmin/daftarkelas-superadminJS', compact('hasil'));
    }

    public function jadwalsiswa ($kode) {
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

        return view('superadmin/jadwalsiswa-superadmin', compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'jam', 'kelas'));
    }

    public function daftarkelasVR () {
        $hasil = DB::select('SELECT * FROM kelas');

        return view('superadmin/daftarkelas-superadminVR', compact('hasil'));
    }

    public function listsiswaVR ($kode) {
        $kelas = DB::select('SELECT Nama_Kelas FROM kelas WHERE ID_Kelas = ?', [$kode]);
        $hasil = DB::select('SELECT * FROM siswas WHERE Kelas = ?', [$kode]);

        return view('superadmin/listsiswa-superadminVR', compact('hasil', 'kelas'));
    }

    public function raporsiswa ($kode) {
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
        
        return view('superadmin/raporsiswa-superadmin', compact('ekskul', 'prestasi', 'nilai', 'rapor'));
    }

    

    public function audit () {
        return view('superadmin/audit-superadmin');
    }

    
}
