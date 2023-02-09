<?php

namespace App\Http\Controllers;

use App\Agenda;
use App\Alumn;
use App\Profil;
use App\Guru;
use App\Carousell;
use Illuminate\Http\Request;

class Pages extends Controller
{
    public function index()
    {
        $data = [
            'carousell' => Carousell::all(),
            'alumni' => Alumn::all(),
        ];
        // dd($data);
        return view('index', $data);
    }

    public function profil()
    {
        $data = [
            'profil' => Profil::first(),
        ];
        // dd($data);
        return view('profil', $data);
    }
    public function guru()
    {
        $data = [
            'guru' => Guru::join('jabatan', 'guru.jabatan_id', '=', 'jabatan.id')->get(['guru.nama', 'guru.nip', 'guru.nama', 'jabatan.jenis']),
        ];
        // dd($data);
        return view('guru', $data);
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
        $data = [
            'agenda' => Agenda::where('jenis', 'agenda')->get(),
        ];
        return view('agenda', $data);
    }

    public function pengumuman()
    {
        $data = [
            'pengumuman' => Agenda::where('jenis', 'pengumuman')->get(),
        ];
        return view('pengumuman', $data);
    }
}
