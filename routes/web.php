<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\siswa\SiswaController;
use App\Http\Controllers\guru\GuruController;
use App\Http\Controllers\tatausaha\TatausahaController;
use App\Http\Controllers\kepsek\KepsekController;
use App\Http\Controllers\kepsek\ProfileController;
use App\Http\Controllers\kepsek\EkskulController;
use App\Http\Controllers\kepsek\SettingController;
use App\Http\Controllers\LogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [SettingController::class, 'landing']);
// Route::get('/', function () {
//     return view('landingpage');
// });
Route::get('/a', function(){
    return view('admin.dashboardadmin');
});

Route::fallback(function () {
    return redirect('/superadmin');
});

Route::redirect('/dashboard', '/superadmin/dashboard');

//Auth
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
    Route::post('/forgot-password', [AuthController::class, 'forgotPasswordProcess'])->name('forgot-password-process');
    Route::get('/reset-password/{token}', [AuthController::class, 'resetPassword'])->name('reset-forgot-password');
    Route::post('/reset-password', [AuthController::class, 'resetPasswordPost'])->name('reset-password-process');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    
    Route::group(['prefix' => 'superadmin', 'middleware' => 'role:Kepala Sekolah'], function () {
        Route::redirect('/', '/superadmin/dashboard');
        Route::get('/dashboard', [KepsekController::class, 'index'])->name('kepsek');
        Route::get('/daftarkelassiswa', [KepsekController::class, 'daftarkelassiswa'])->name('daftarkelassiswasadmin');
        Route::get('/tambahkelas', [KepsekController::class, 'tambahkelas'])->name('tambahkelassadmin');
        Route::post('/tambahkelas', [KepsekController::class, 'tambahkelasPost'])->name('tambahkelassadminPost');
        //SISWA
        Route::get('/listsiswa/{kode}', [KepsekController::class, 'listsiswa'])->name('listsiswasadmin');
        Route::get('/tambahsiswa/{kode}', [KepsekController::class, 'tambahsiswa'])->name('tambahsiswasadmin');
        Route::post('/tambahsiswa', [KepsekController::class, 'tambahsiswaPost'])->name('tambahsiswasadminPost');
        Route::get('/editsiswa/{kode}', [KepsekController::class, 'editsiswa'])->name('editsiswa');
        Route::post('/editsiswa', [KepsekController::class, 'editsiswaPost'])->name('editsiswaPost');
        Route::get('/deletesiswa/{kode}', [KepsekController::class, 'deletesiswa'])->name('deletesiswa');
        Route::get('/detailsiswa/{nisn}', [KepsekController::class, 'detailsiswa'])->name('detailsiswasadmin');
        //PTK
        Route::get('/daftarptk', [KepsekController::class, 'daftarptk'])->name('daftarptksadmin');
        Route::get('/tambahptk', [KepsekController::class, 'tambahptk'])->name('tambahptk');
        Route::post('/tambahptk', [KepsekController::class, 'tambahptkPost'])->name('tambahptkPost');
        Route::get('/editptk/{kode}', [KepsekController::class, 'editptk'])->name('editptk');
        Route::post('/editptk', [KepsekController::class, 'editptkPost'])->name('editptkPost');
        Route::get('/detailptk/{kode}', [KepsekController::class, 'detailptk'])->name('detailptksadmin');
        Route::get('/deleteptk/{kode}', [KepsekController::class, 'deleteptk'])->name('deleteptk');
        //TU
        Route::get('/daftartu', [KepsekController::class, 'daftartu'])->name('daftartusadmin');
        Route::get('/tambahtu', [KepsekController::class, 'tambahtu'])->name('tambahtu');
        Route::post('/tambahtu', [KepsekController::class, 'tambahtuPost'])->name('tambahtuPost');
        Route::get('/edittu/{kode}', [KepsekController::class, 'edittu'])->name('edittu');
        Route::post('/edittu', [KepsekController::class, 'edittuPost'])->name('edittuPost');
        Route::get('/detailtu/{kode}', [KepsekController::class, 'detailtu'])->name('detailtusadmin');
        Route::get('/deletetu/{kode}', [KepsekController::class, 'deletetu'])->name('deletetu');

        Route::get('/listraporsiswa', [KepsekController::class, 'listraporsiswa'])->name('listraporsiswasadmin');
        Route::get('/listsiswaNS/{kode}', [KepsekController::class, 'listsiswaNS'])->name('listsiswaNS');
        Route::get('/listnilaisiswa/{kode}', [KepsekController::class, 'listnilaisiswa'])->name('listsiswa');
        Route::get('/editraporsiswa', [KepsekController::class, 'editraporsiswa'])->name('editraporsiswa');
        Route::get('/daftarkelasMP', [KepsekController::class, 'daftarkelasMP'])->name('daftarkelasMP');
        Route::get('/daftarmapel/{kode}', [KepsekController::class, 'daftarmapel'])->name('daftarmapel');
        Route::get('/tambahmapel', [KepsekController::class, 'tambahmapel'])->name('tambahmapel');
        Route::post('/tambahmapel', [KepsekController::class, 'tambahmapelPost'])->name('tambahmapelPost');
        Route::get('/deletemapel/{kode}', [KepsekController::class, 'deletemapel'])->name('deletemapel');
        Route::get('/daftarkelasJS', [KepsekController::class, 'daftarkelasJS'])->name('daftarkelasJS');
        Route::get('/jadwalsiswa/{kode}', [KepsekController::class, 'jadwalsiswa'])->name('jadwalsiswasadmin');
        Route::get('/daftarkelas', [KepsekController::class, 'daftarkelasVR'])->name('daftarkelasVR');
        Route::get('/listsiswaVR/{kode}', [KepsekController::class, 'listsiswaVR'])->name('listsiswaVR');
        Route::get('/raporsiswa', [KepsekController::class, 'raporsiswa'])->name('raporsiswasadmin');
        //Ekskul
        Route::get('/daftarekskul', [EkskulController::class, 'daftarekskul'])->name('daftarekskulsadmin');
        Route::get('/tambahekskul', [EkskulController::class, 'tambahekskul'])->name('tambahekskulsadmin');
        Route::post('/tambahekskul', [EkskulController::class, 'tambahekskulPost'])->name('tambahekskulPost');
        Route::get('/editekskul/{kode}', [EkskulController::class, 'editekskul'])->name('editekskulsadmin');
        Route::post('/editekskul', [EkskulController::class, 'editekskulPost'])->name('editekskulPost');
        Route::get('/deleteekskul/{kode}', [EkskulController::class, 'deleteekskul'])->name('deleteekskul');
        //Ekskul Siswa
        Route::get('/daftarekskulsiswa', [EkskulController::class, 'daftarekskulsiswa'])->name('daftarekskulsiswasadmin');
        Route::get('/editekskulsiswa/{kode}', [EkskulController::class, 'editekskulsiswa'])->name('editekskulsiswasadmin');
        Route::post('/editekskulsiswa', [EkskulController::class, 'editekskulsiswaPost'])->name('editekskulsiswaPost');
        Route::get('/deleteekskulsiswa/{kode}', [EkskulController::class, 'deleteekskulsiswa'])->name('deleteekskulsiswa');

        Route::get('/audit', [KepsekController::class, 'audit'])->name('auditsadmin');
        Route::get('/profile', [ProfileController::class, 'profile'])->name('profilesadmin');
        Route::get('/editprofile', [ProfileController::class, 'editprofile'])->name('editprofilesadmin');
        Route::post('/editprofile', [ProfileController::class, 'editprofilePost'])->name('editprofilePost');
        //Log
        Route::get('/log_absensi_ekskul', [LogController::class, 'index'])->name('log_absensi_ekskul');
        Route::get('/log_absensi_kelas', [LogController::class, 'absen_kelas'])->name('log_absensi_kelas');
        Route::get('/log_ekskul_siswa', [LogController::class, 'ekskul_siswa'])->name('log_ekskul_siswa');
        Route::get('/log_ekskul', [LogController::class, 'ekskul'])->name('log_ekskul');
        Route::get('/log_guru', [LogController::class, 'guru'])->name('log_gurusadmin');
        Route::get('/log_jadwal_mapel', [LogController::class, 'jadwalmapel'])->name('log_jadwal_mapel');
        Route::get('/log_kelas', [LogController::class, 'kelas_log'])->name('log_kelas');
        Route::get('/log_kepala_sekolah', [LogController::class, 'kepsek_log'])->name('log_kepala_sekolah');
        Route::get('/log_mata_pelajaran', [LogController::class, 'mapel_log'])->name('log_mata_pelajaran');
        Route::get('/log_nilai_ekskul', [LogController::class, 'nilai_ekskul_log'])->name('log_nilai_ekskul');
        Route::get('/log_nilai', [LogController::class, 'nilai_log'])->name('log_nilai');
        Route::get('/log_prestasi', [LogController::class, 'prestasi_log'])->name('log_prestasi');
        Route::get('/log_rapor', [LogController::class, 'rapor_log'])->name('log_rapor');
        Route::get('/log_role_assignment', [LogController::class, 'role_assign_log'])->name('log_role_assignment');
        Route::get('/log_roles', [LogController::class, 'roles_log'])->name('log_roles');
        Route::get('/log_siswa', [LogController::class, 'siswalog'])->name('log_siswa');
        Route::get('/log_status_kip_kps_pip', [LogController::class, 'kipkpspiplog'])->name('log_status_kip_kps_pip');
        Route::get('/log_wali_siswa', [LogController::class, 'walisiswalog'])->name('log_wali_siswa');
        Route::get('/log_tata_usaha', [LogController::class, 'tatausahalog'])->name('log_tata_usaha');
    });

    //Admin
    Route::group(['prefix' => 'admin', 'middleware' => 'role:Admin'], function () {
        Route::redirect('/', '/admin/dashboard');
        Route::get('/dashboard', [TatausahaController::class, 'index'])->name('tatausaha');
        Route::get('/daftarkelassiswa', [TatausahaController::class, 'daftarkelassiswa'])->name('daftarkelassiswa');
        Route::get('/tambahkelas', [TatausahaController::class, 'tambahkelas'])->name('tambahkelas');
        Route::get('/listsiswa', [TatausahaController::class, 'listsiswa'])->name('listsiswaadmin');
        Route::get('/tambahsiswa', [TatausahaController::class, 'tambahsiswa'])->name('tambahsiswa');
        Route::get('/detailsiswa', [TatausahaController::class, 'detailsiswa'])->name('detailsiswa');
        Route::get('/daftarptk', [TatausahaController::class, 'daftarptk'])->name('daftarptk');
        Route::get('/detailptk', [TatausahaController::class, 'detailptk'])->name('detailptk');
        Route::get('/daftartu', [TatausahaController::class, 'daftartu'])->name('daftartu');
        Route::get('/detailtu', [TatausahaController::class, 'detailtu'])->name('detailtu');
        Route::get('/listraporsiswa', [TatausahaController::class, 'listraporsiswa'])->name('listraporsiswa');
        Route::get('/raporsiswa', [TatausahaController::class, 'raporsiswa'])->name('raporsiswaadmin');
        Route::get('/editraporsiswa', [TatausahaController::class, 'editraporsiswa'])->name('editraporsiswa');
        Route::get('/daftarkelassiswaJS', [TatausahaController::class, 'daftarkelassiswaJS'])->name('daftarkelassiswaJS');
        Route::get('/jadwalsiswa', [TatausahaController::class, 'jadwalsiswa'])->name('jadwalsiswa');
        Route::get('/daftarekskul', [TatausahaController::class, 'daftarekskul'])->name('daftarekskul');
        Route::get('/tambahekskul', [TatausahaController::class, 'tambahekskul'])->name('tambahekskul');
        Route::get('/daftarekskulsiswa', [TatausahaController::class, 'daftarekskulsiswa'])->name('daftarekskulsiswa');
        Route::get('/audit', [TatausahaController::class, 'audit'])->name('audit');
        Route::get('/log_aktivitas', [TatausahaController::class, 'log_aktivitas'])->name('log_aktivitas');
        Route::get('/log_guru', [TatausahaController::class, 'log_guru'])->name('log_guru');
        Route::get('/log_permission', [TatausahaController::class, 'log_permission'])->name('log_permission');
        Route::get('/log_profile', [TatausahaController::class, 'log_profile'])->name('log_profile');
        Route::get('/log_role', [TatausahaController::class, 'log_role'])->name('log_role');
        Route::get('/log_user', [TatausahaController::class, 'log_user'])->name('log_user');
        Route::get('/profile', [TatausahaController::class, 'profile'])->name('profileadmin');
        Route::get('/editprofile', [TatausahaController::class, 'editprofile'])->name('editprofileadmin');
    });

    //Guru
    Route::group(['prefix' => 'guru', 'middleware' => 'role:Guru'], function () {
        Route::redirect('/', '/guru/dashboard');
        Route::get('/dashboard', [GuruController::class, 'index'])->name('guru');
        Route::get('/jadwalmengajar', [GuruController::class, 'jadwalmengajar'])->name('jadwalmengajar');
        Route::get('/raporsiswa', [GuruController::class, 'raporsiswa'])->name('raporsiswa');
        Route::get('/listsiswa', [GuruController::class, 'listsiswa'])->name('listsiswa');
        Route::get('/tambahnilai', [GuruController::class, 'tambahnilai'])->name('tambahnilai');
        Route::get('/profilelengkap', [GuruController::class, 'profilelengkap'])->name('profilelengkap');
        Route::get('/editprofile', [GuruController::class, 'editprofile'])->name('editprofileguru');
    });

    //Siswa
    Route::group(['prefix' => 'siswa', 'middleware' => 'role:Siswa'], function () {
        Route::redirect('/', '/siswa/dashboard');
        Route::get('/dashboard', [SiswaController::class, 'index'])->name('siswa');
        Route::get('/jadwal', [SiswaController::class, 'jadwal'])->name('jadwal');
        Route::get('/profile', [SiswaController::class, 'profile'])->name('profile');
        Route::get('/editprofile', [SiswaController::class, 'editprofile'])->name('editprofile');
        Route::get('/rapor', [SiswaController::class, 'rapor'])->name('rapor');
    });
});