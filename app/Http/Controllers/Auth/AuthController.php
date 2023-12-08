<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon; 

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

    public function forgotPassword (){
        return view('auth.forgotpassword');
    }

    public function forgotPasswordProcess(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token =Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        // Mail::send("email.forgetPassword",['token' => $token], function ($message) use ($request){
        //     $message->to($request->email);
        //     $message->subject("Reset Password");
        // });

        return redirect()->route('reset-forgot-password', $token);


    }

    function resetPassword($token){
        return view('auth.new-password', compact('token'));
    }

    function resetPasswordPost(Request $request){

        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:5',
            'password_confimation' => 'required'
        ]);

        $updatePassword = DB::table('password_reset_tokens')->where([
            'email' => $request->email,
            'token' => $request->token
        ])->first();
        
        if(!$updatePassword){
            return redirect()->route('reset-password', $token);
        }
        $email = $request->email;
        $password = Hash::make($request->password);
        DB::update('update users set password = ? where email = ?', [$password, $email]);
        
        DB::table('password_reset_tokens')->where(["email" => $request->email])->delete();

        return redirect()->route('login');


    }
}
