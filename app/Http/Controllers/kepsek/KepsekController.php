<?php

namespace App\Http\Controllers\kepsek;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade

class KepsekController extends Controller
{
    public function index () {
        $data = DB::select('SELECT * FROM kepala_sekolahs');
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
        $absensi_kelas = DB::select('SELECT * FROM absensi_kelas WHERE Kelas = ?', [$kode]);

        return view('superadmin.manajemenuser.listsiswa-superadminMU', compact('absensi_kelas'));
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
                'NISN' => $request->nis,
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
            return redirect()->back();
        } else {
            toast('Your Data as failed submited!','error');
            return redirect()->back();
        }
    }

    public function deletesiswa($kode){
        DB::table('absensi_kelas')->where(["ID_Absensi" => $kode])->delete();
        toast('Your Data as been deleted!','success');
        return redirect()->back();
    }

    public function tambahsiswa () {
        return view('superadmin.manajemenuser.tambahsiswa-superadminMU');
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
                'NIPD' => 0,
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
            return redirect()->back();
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
        toast('Your data as been delete','success');
        return redirect()->back();
    }

    public function listraporsiswa () {
        $hasil = DB::select('SELECT * FROM kelas');

        return view('superadmin/listraporsiswa-superadmin', compact('hasil'));
    }

    public function listsiswaNS () {

        return view('superadmin/listsiswa-superadminNS');
    }

    public function editraporsiswa () {
        return view('superadmin/editraporsiswa-superadmin');
    }

    public function daftarkelasMP () {
        $hasil = DB::select('SELECT * FROM kelas');

        return view('superadmin/daftarkelas-superadminMP', compact('hasil'));
    }

    public function daftarmapel ($kode) {
        $hasil = DB::table('mata_pelajarans')
            ->join('guruses', 'guruses.NUPTK', 'mata_pelajarans.Guru_Mapel')
            ->select('mata_pelajarans.*', 'guruses.*')
            ->get();
        

        return view('superadmin/daftarmapel-superadminMP', compact('hasil'));
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
        $hasil = DB::table('absensi_kelas')
        ->join('siswas', 'siswas.NISN', 'absensi_kelas.Siswa_ID')
        ->where('absensi_kelas.Kelas', $kode)
        ->select('siswas.Nama_Siswa', DB::raw('MAX(siswas.NISN) AS NISN'))
        ->groupBy('siswas.Nama_Siswa')
        ->get();

        return view('superadmin/listsiswa-superadminVR', compact('hasil', 'kelas'));
    }

    public function raporsiswa () {
        return view('superadmin/raporsiswa-superadmin');
    }

    

    public function audit () {
        return view('superadmin/audit-superadmin');
    }

    
}
