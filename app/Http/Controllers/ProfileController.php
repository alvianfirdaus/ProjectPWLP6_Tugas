<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profil;

class ProfileController extends Controller
{
    public function profile1()
    {
        $dataprofil = Profil::where('nama', 'alvian')->get();
        return view('mahasiswas.profile1', compact('dataprofil'));
    }
    public function profile2()
    {
        $dataprofil = Profil::where('nama', 'ega')->get();
        return view('mahasiswas.profile2', compact('dataprofil'));
    }
}
