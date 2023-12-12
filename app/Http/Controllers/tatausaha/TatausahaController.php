<?php

namespace App\Http\Controllers\tatausaha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class TatausahaController extends Controller
{
    public function index(){
        $id = Auth::user()->to_role;
        $data = DB::select('SELECT * FROM tata_usahas WHERE ID_Pegawai = ?', [$id]);
        return view('admin.dashboardadmin', compact('data'));
    }

    public function daftarkelassiswa(){
        $hasil = DB::select('SELECT * FROM kelas');
        return view('admin.manajemenuser.daftarkelassiswa-adminMU', compact('hasil'));   
    }

    public function tambahkelas(){
        $data = DB::select('SELECT * FROM guruses');
        return view('admin.manajemenuser.tambahkelas-adminMU', compact('data'));   
    }

    public function tambahkelasPosts (Request $request) {
        $data = $request->validate([
            'id_kelas' => 'required',
            'wali_kelas' => 'required',
            'nama_kelas' => 'required',
            'tingkatan_kelas' => 'required',
            'kelompok_kelas' => 'required',
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
            return redirect('/admin/daftarkelassiswa');
        } else {
            toast('Your Data as failed submited!','error');
            return redirect()->back();
        }
    }

    public function listsiswa($kode){
        $siswa = DB::select('SELECT * FROM siswas WHERE Kelas = ?', [$kode]);
        return view('admin.manajemenuser.listsiswa-adminMU', compact('siswa', 'kode'));   
    }

    public function editsiswa ($kode) {
        $data = DB::select('SELECT * from siswas WHERE NISN = ?', [$kode]);
        return view('admin.editsiswa', compact('data'));
    }

    public function editsiswasPost (Request $request) {
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
            return redirect('/admin/daftarkelassiswa');
        } else {
            toast('Your Data as failed submited!','error');
            return redirect()->back();
        }
    }

    public function deletesiswas($kode){
        DB::table('siswas')->where(["NISN" => $kode])->delete();
        DB::table('users')->where('to_role', $kode)->delete();
        toast('Your Data as been deleted!','success');
        return redirect()->back();
    }

    public function tambahsiswa($kode){
        return view('admin.manajemenuser.tambahsiswa-adminMU', compact('kode'));   
    }

    public function tambahsiswasPost (Request $request) {
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
            return redirect('/admin/daftarkelassiswa');
        } else {
            toast('Your Data as failed submited!','error');
            return redirect()->back();
        }
    }

    public function detailsiswa($kode){
        $siswas = DB::select('SELECT * FROM siswas WHERE NISN= ?',[$kode]);
        return view('admin.manajemenuser.detailsiswa-adminMU', compact('siswas'));   
    }

    public function daftarptk(){
        $ptk = DB::select('SELECT * FROM guruses');
        return view('admin.manajemenuser.daftarptk-adminMU', compact('ptk'));   
    }

    public function tambahptk () {
        return view('admin.manajemenuser.tambahptk');
    }

    public function tambahptksPost (Request $request) {
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
            return redirect('/admin/daftarptk');
        } else {
            toast('Your data as failed sumbit','error');
            return redirect()->back();
        }
    }

    public function editptk ($kode) {
        $data = DB::select('SELECT * FROM guruses WHERE NUPTK = ?', [$kode]);

        return view('admin.manajemenuser.editptk', compact('data'));
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
            return redirect('/admin/daftarptk');
        } else {
            toast('Your data as failed sumbit','error');
            return redirect()->back();
        }
    }

    public function deleteptk($kode){
        DB::table('guruses')->where('NUPTK', $kode)->delete();
        DB::table('users')->where('to_role', $kode)->delete();
        toast('Your data as been delete','success');
        return redirect()->back();
    }

    public function detailptk($kode){
        $ptk = DB::select('SELECT * FROM guruses WHERE NUPTK = ?', [$kode]);
        return view('admin.manajemenuser.detailptk-adminMU', compact('ptk'));   
    }

    public function daftartu(){
        $tu = DB::select('SELECT * FROM tata_usahas');
        return view('admin.manajemenuser.daftartu-adminMU', compact('tu'));   
    }

    public function tambahtu () {
        return view('admin.manajemenuser.tambahtu');
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
            return redirect('/admin/daftartu');
        } else {
            toast('Your data as failed sumbit','error');
            return redirect()->back();
        }
    }

    public function edittu ($kode) {
        $data = DB::select('SELECT * FROM tata_usahas WHERE ID_Pegawai = ?', [$kode]);

        return view('admin.manajemenuser.edittu', compact('data'));
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
            return redirect('/admin/daftartu');
        } else {
            toast('Your data as failed sumbit','error');
            return redirect()->back();
        }
    }

    public function deletetu($kode){
        DB::table('tata_usahas')->where('ID_Pegawai', $kode)->delete();
        DB::table('users')->where('to_role', $kode)->delete();
        toast('Your data as been delete','success');
        return redirect()->back();
    }

    public function detailtu($kode){
        $tu = DB::select('SELECT * FROM tata_usahas WHERE ID_Pegawai = ?',[$kode]);
        return view('admin.manajemenuser.detailtu-adminMU', compact('tu'));   
    }

    public function listraporsiswa(){
        $hasil = DB::select('SELECT * FROM kelas');
        return view('admin.listraporsiswa-admin', compact('hasil'));   
    }

    public function raporsiswa(){
        return view('admin.raporsiswa-admin');   
    }

    public function editraporsiswa(){
        return view('admin.editraporsiswa-admin');   
    }

    public function daftarkelassiswaJS(){
        $hasil = DB::select('SELECT * FROM kelas');
        return view('admin.daftarkelassiswa-adminJS', compact('hasil'));   
    }

    public function jadwalsiswa($kode){
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

        return view('admin.jadwalsiswa-admin', compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'jam', 'kelas'));   
    }

    public function daftarekskul(){
        $ekstrakurikuler = DB::table('ekstrakurikulers')
            ->join('guruses', 'guruses.NUPTK', 'ekstrakurikulers.Guru_Ekskul')
            ->select('ekstrakurikulers.*', 'guruses.*')
            ->get();
        
        return view('admin.daftarekskul-admin', compact('ekstrakurikuler'));   
    }

    public function tambahekskul(){
        $data = DB::select('SELECT * from guruses');
        return view('admin.tambahekskul-admin', compact('data'));   
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
            return redirect('/admin/daftarekskul');
        } else {
            toast('Your Data as failed submited!','error');
            return redirect()->back();
        }
    }

    public function editekskul ($kode) {
        $data = DB::select('SELECT * from guruses');
        $ekskul = DB::select('SELECT * from ekstrakurikulers WHERE Kode_Ekskul = ?', [$kode]);
        return view('admin.editekskul', compact('data', 'ekskul'));
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
            return redirect('/admin/daftarekskul');
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

    public function daftarekskulsiswa(){
        $hasil = DB::table('ekskul_siswas')
            ->join('siswas', 'ekskul_siswas.Siswa_ID', '=', 'siswas.NISN')
            ->join('ekstrakurikulers', 'ekskul_siswas.Ekskul_Kode', '=', 'ekstrakurikulers.Kode_Ekskul')
            ->join('tahun_ajarans', 'ekskul_siswas.Thn_Ajaran', '=', 'tahun_ajarans.ID_Thn_Ajaran')
            ->select('ekskul_siswas.*', 'siswas.Nama_Siswa AS Nama_Siswa', 'ekstrakurikulers.Nama_Ekskul AS Nama_Ekskul', 'tahun_ajarans.*')
            ->get();

        return view('admin.daftarekskulsiswa-admin', compact('hasil'));   
    }

    public function editekskulersiswa ($kode) {
        $hasil = DB::table('ekskul_siswas')
            ->join('siswas', 'ekskul_siswas.Siswa_ID', '=', 'siswas.NISN')
            ->join('ekstrakurikulers', 'ekskul_siswas.Ekskul_Kode', '=', 'ekstrakurikulers.Kode_Ekskul')
            ->join('tahun_ajarans', 'ekskul_siswas.Thn_Ajaran', '=', 'tahun_ajarans.ID_Thn_Ajaran')
            ->where('ekskul_siswas.ID_Ekskul_Siswa', $kode)
            ->select('ekskul_siswas.*', 'siswas.Nama_Siswa AS Nama_Siswa', 'ekstrakurikulers.Nama_Ekskul AS Nama_Ekskul', 'tahun_ajarans.*')
            ->get();
        $data = DB::select('SELECT * from ekstrakurikulers');
        $tahun = DB::select('SELECT * from tahun_ajarans');
        return view('admin.editekskulsiswa', compact('hasil', 'data', 'tahun'));
    }

    public function editekskulersiswaPost (Request $request) {
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
            return redirect('/admin/daftarekskulsiswa');
        } else {
            toast('Your Data as failed submited!','error');
            return redirect()->back();
        }
    }

    public function audit(){
        return view('admin.audit-admin');   
    }

    public function log_aktivitas(){
        return view('admin.log.log_aktivitas_admin');   
    }

    public function log_guru(){
        return view('admin.log.log_guru_admin');   
    }

    public function log_permission(){
        return view('admin.log.log_permission_admin');   
    }

    public function log_profile(){
        return view('admin.log.log_profile_admin');   
    }

    public function log_role(){
        return view('admin.log.log_role_admin');   
    }

    public function log_user(){
        return view('admin.log.log_user_admin');   
    }

    public function profile(){
        $id = Auth::user()->to_role;
        $data = DB::select('SELECT * FROM tata_usahas WHERE ID_Pegawai = ?', [$id]);
        return view('admin.profile-admin', compact('data'));
    }

    public function editprofile(){
        $id = Auth::user()->to_role;
        $data = DB::select('SELECT * FROM tata_usahas WHERE ID_Pegawai = ?', [$id]);
        return view('admin.editprofile-admin', compact('data'));
    }

    public function editprofileadminPost(Request $request){
        $data = $request->validate([
            'id'=> 'required',
            'nama'=> 'required',
            'jenis_kelamin'=> 'required',
            'tmt_kerja'=> 'required',
            'tempat_kerja'=> 'required',
            'tanggal_lahir'=> 'required',
            'jenjang'=> 'required',
            'status'=> 'required',
        ]);
        if ($data) {
            DB::table('tata_usahas')->where(['ID_Pegawai' => $request->id])->update([
                'Nama_Pegawai'=> $request->nama,
                'Jenis_Kelamin'=> $request->jenis_kelamin,
                'TMT_Kerja'=> $request->tmt_kerja,
                'Tempat_Lahir'=> $request->tempat_kerja,
                'Tanggal_Lahir'=> $request->tanggal_lahir,
                'Jenjang_Pendidikan'=> $request->jenjang,
                'Status'=> $request->status,
            ]);
            toast('Your Data as been submited!','success');
            return redirect('/admin/profile');
        } else {
            toast('Your Data as failed submited!','error');
            return redirect()->back();
        }
    }
}
