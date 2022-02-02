<?php

namespace App\Http\Controllers;

use App\Models\DataSekolah;
use Illuminate\Http\Request;

class DataSekolahController extends Controller
{
    public function murid()
    {
        $data_sekolah = DataSekolah::where('status', 'Murid')->get();
        return view('murid', compact('data_sekolah'));
    }

    public function guru()
    {
        $data_sekolah = DataSekolah::where('status', 'Guru')->get();
        return view('guru', compact('data_sekolah'));
    }

    public function staff()
    {
        $data_sekolah = DataSekolah::where('status', 'Staff')->get();
        return view('staff', compact('data_sekolah'));
    }

    public function pegawai()
    {
        $data_sekolah = DataSekolah::where('status', 'Pegawai')->get();
        return view('pegawai', compact('data_sekolah'));
    }
}
