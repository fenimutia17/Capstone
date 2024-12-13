<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkincareController extends Controller
{
    /**
     * Tampilkan halaman welcome skincare.
     */
    public function welcome()
    {
        return view('welcome');
    }
}

