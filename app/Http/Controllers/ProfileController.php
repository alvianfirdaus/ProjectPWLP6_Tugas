<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profil;

class ProfileController extends Controller
{
    public function profile1()
    {
        // Profile 1 Alvian
        $dataprofil = Profil::where('nama', 'alvian')->get();
        return view('mahasiswas.profile1', compact('dataprofil'));
    }
    public function profile2()
    {
        // Profile 2 Ega
        $dataprofil = Profil::where('nama', 'ega')->get();
        return view('mahasiswas.profile2', compact('dataprofil'));
    }
}
