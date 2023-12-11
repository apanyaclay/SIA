<?php

namespace App\Http\Controllers\kepsek;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade

class SettingController extends Controller
{
    public function landing(){
        $data = DB::select('SELECT * FROM settings');

        return view('landingpage', compact('data'));
    }
}
