<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('navbar.kontak'); // Pastikan view ini ada
    }
}
