<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade
use App\Models\Post;

class GuruController extends Controller
{
    public function index()
    {
        // Fetch $guruData from your database or any source
        $guru = DB::select('SELECT * FROM guruses');

        return view('guru/dashboardguru', compact('guru'));
    }
}
