<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepalaSekolahController extends Controller
{
    public function index(){
        return view('superadmin.dashboardsuperadmin');
    }
}
