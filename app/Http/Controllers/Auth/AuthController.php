<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login (){
        return view('auth.loginpage');
    }

    public function authenticate (Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $user = Role::where('Email', $request->email)->first();

            if($user){
                $userRole = $user->Nama_Role;
                
            switch ($userRole) {
                case 'Kepala Sekolah':
                    return redirect('/superadmin/dashboard');
                case 'Siswa':
                    return redirect('/siswa/dashboard');
                case 'Guru':
                    return redirect('/guru/dashboard');
                default:
                    return redirect('/admin/dashboard');
            }
        } else {
            return back()->with('loginError', 'Informasi tidak ditemukan');
        }
    }
        return back()->with('loginError', 'Login Gagal');
    }
    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

    public function konMail(){
        return view('konfirmasi-email');
    }

    public function konMailLogic(Request $request){
        $request->validate([
            'email' => 'required'
        ]);
        $hasil = User::where('email', $request->email)->get();
        if(isset($hasil[0]->email)){
            return redirect('/reset-password?email=' . $request->email);
        }else{
            return back()->with('gagal', 'Konfirmasi Email Gagal');
        }
    }

    public function resetPass(){
        $email = request('email');
        return view('reset-password', compact('email'));
    }

    public function resetPassLogic(Request $request){
        $request->validate([
            'password' => 'required|same:konfirmasi_password|min:5',
            'konfirmasi_password' => 'required|same:password|min:5',
        ]);
        $password = bcrypt($request->password);
        User::where('email', $request->email)->update(['password' => $password]);

        return redirect('/login')->with('success', 'Password berhasil dirubah');
    }
}
