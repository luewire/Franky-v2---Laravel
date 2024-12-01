<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Mengambil data pengguna yang login
        return view('landingpage', compact('user')); // Kirim data user ke view
    }
}
