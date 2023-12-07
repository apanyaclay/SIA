<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\siswa\SiswaController;
use App\Http\Controllers\guru\GuruController;
use App\Http\Controllers\tatausaha\TatausahaController;
use App\Http\Controllers\kepsek\KepsekController;

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

Route::get('/', function () {
    return view('landingpage');
});

Route::fallback(function () {
    return redirect('/superadmin');
});

//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    //SuperAdmin
    // Route::middleware(['checkRole:user'])->group(function () {
        
    // });
    Route::group(['prefix' => 'superadmin', 'middleware' => 'role:Kepala Sekolah'], function () {
        Route::redirect('/', '/superadmin/dashboard');
        Route::get('/dashboard', [KepsekController::class, 'index'])->name('kepsek');
        Route::get('/daftarkelassiswa', [KepsekController::class, 'daftarkelassiswa'])->name('daftarkelassiswasadmin');
        Route::get('/tambahkelas', [KepsekController::class, 'tambahkelas'])->name('tambahkelas');
        Route::get('/listsiswa', [KepsekController::class, 'listsiswa'])->name('listsiswasadmin');
        Route::get('/tambahsiswa', [KepsekController::class, 'tambahsiswa'])->name('tambahsiswa');
        Route::get('/detailsiswa', [KepsekController::class, 'detailsiswa'])->name('detailsiswa');
        Route::get('/daftarptk', [KepsekController::class, 'daftarptk'])->name('daftarptksadmin');
        Route::get('/tambahptk', [KepsekController::class, 'tambahptk'])->name('tambahptk');
        Route::get('/detailptk', [KepsekController::class, 'detailptk'])->name('detailptksadmin');
        Route::get('/daftartu', [KepsekController::class, 'daftartu'])->name('daftartusadmin');
        Route::get('/tambahtu', [KepsekController::class, 'tambahtu'])->name('tambahtu');
        Route::get('/detailtu', [KepsekController::class, 'detailtu'])->name('detailtusadmin');
        Route::get('/listraporsiswa', [KepsekController::class, 'listraporsiswa'])->name('listraporsiswasadmin');
        Route::get('/listsiswaNS', [KepsekController::class, 'listsiswaNS'])->name('listsiswaNS');
        Route::get('/editraporsiswa', [KepsekController::class, 'editraporsiswa'])->name('editraporsiswa');
        Route::get('/daftarkelasMP', [KepsekController::class, 'daftarkelasMP'])->name('daftarkelasMP');
        Route::get('/daftarmapel', [KepsekController::class, 'daftarmapel'])->name('daftarmapel');
        Route::get('/tambahmapel', [KepsekController::class, 'tambahmapel'])->name('tambahmapel');
        Route::get('/daftarkelasJS', [KepsekController::class, 'daftarkelasJS'])->name('daftarkelasJS');
        Route::get('/jadwalsiswa', [KepsekController::class, 'jadwalsiswa'])->name('jadwalsiswa');
        Route::get('/daftarkelas', [KepsekController::class, 'daftarkelasVR'])->name('daftarkelasVR');
        Route::get('/listsiswaVR', [KepsekController::class, 'listsiswaVR'])->name('listsiswaVR');
        Route::get('/raporsiswa', [KepsekController::class, 'raporsiswa'])->name('raporsiswa');
        Route::get('/daftarekskul', [KepsekController::class, 'daftarekskul'])->name('daftarekskulsadmin');
        Route::get('/tambahekskul', [KepsekController::class, 'tambahekskul'])->name('tambahekskul');
        Route::get('/daftarekskulsiswa', [KepsekController::class, 'daftarekskulsiswa'])->name('daftarekskulsiswasadmin');
        Route::get('/audit', [KepsekController::class, 'audit'])->name('auditsadmin');
        Route::get('/profile', [KepsekController::class, 'profile'])->name('profilesadmin');
        Route::get('/editprofile', [KepsekController::class, 'editprofile'])->name('editprofilesadmin');
    });

    //Admin
    Route::group(['prefix' => 'admin', 'middleware' => 'role:Tata Usaha'], function () {
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