<?php

namespace App\Http\Controllers;

use App\Models\mapel;
use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    public function index()
    {
        $maples = mapel::all(); // Assuming you want to fetch all mapel data, but not used in this method
        $siswa = siswa::where('username', Auth::user()->username)->firstOrFail();
        return view('siswa.jadwal', [
            'menu' => 'jadwal',
            'title' => 'Rekap Absensi ' . $siswa->nama,
            'siswa' => $siswa,
            'maples' => $maples
        ]);
    }
}
