<?php

namespace App\Http\Controllers\tatausaha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TatausahaController extends Controller
{
    public function index(){
        return view('admin.dashboardadmin');
    }

    public function daftarkelassiswa(){
        return view('admin.manajemenuser.daftarkelassiswa-adminMU');   
    }

    public function tambahkelas(){
        return view('admin.manajemenuser.tambahkelas-adminMU');   
    }

    public function listsiswa(){
        return view('admin.manajemenuser.listsiswa-adminMU');   
    }

    public function tambahsiswa(){
        return view('admin.manajemenuser.tambahsiswa-adminMU');   
    }

    public function detailsiswa(){
        return view('admin.manajemenuser.detailsiswa-adminMU');   
    }

    public function daftarptk(){
        return view('admin.manajemenuser.daftarptk-adminMU');   
    }

    public function detailptk(){
        return view('admin.manajemenuser.detailptk-adminMU');   
    }

    public function daftartu(){
        return view('admin.manajemenuser.daftartu-adminMU');   
    }

    public function detailtu(){
        return view('admin.manajemenuser.detailtu-adminMU');   
    }

    public function listraporsiswa(){
        return view('admin.listraporsiswa-admin');   
    }

    public function raporsiswa(){
        return view('admin.raporsiswa-admin');   
    }

    public function editraporsiswa(){
        return view('admin.editraporsiswa-admin');   
    }

    public function daftarkelassiswaJS(){
        return view('admin.daftarkelassiswa-adminJS');   
    }

    public function jadwalsiswa(){
        return view('admin.jadwalsiswa-admin');   
    }

    public function daftarekskul(){
        return view('admin.daftarekskul-admin');   
    }

    public function tambahekskul(){
        return view('admin.tambahekskul-admin');   
    }

    public function daftarekskulsiswa(){
        return view('admin.daftarekskulsiswa-admin');   
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
        return view('admin.profile-admin');   
    }

    public function editprofile(){
        return view('admin.editprofile-admin');
    }
}
