<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function profil()
    {
        return view('profil');
    }

    public function foto()
    {
        return view('foto');
    }

    public function video()
    {
        return view('video');
    }

    public function agenda()
    {
        return view('agenda');
    }

    public function pengumuman()
    {
        return view('pengumuman');
    }
}
