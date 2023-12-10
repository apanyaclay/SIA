<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Role;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (Auth::check()) {
                $userRole = Auth::user()->role;
                // Cek apakah peran pengguna termasuk dalam roles yang diizinkan
                if (in_array($userRole, $roles)) {
                    return $next($request);
                } else {
                    switch ($userRole) {
                        case 'Kepala Sekolah':
                            return redirect()->route('kepsek');
                        case 'Siswa':
                            return redirect()->route('siswa');
                        case 'Guru':
                            return redirect()->route('guru');
                        default:
                            return redirect()->route('tatausaha');
                    }
                }
        } else {
            // Jika peran tidak diizinkan, redirect ke halaman yang sesuai atau tampilkan pesan error
            return redirect('/');
        }
    }
}
