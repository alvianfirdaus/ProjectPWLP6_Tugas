<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengalaman;

class PengalamanController extends Controller
{
    public function pengalaman()
    {
        // Pengalaman Alvian
        $data1 = Pengalaman::where('id', 1)->get();
        // Pengalaman Ega
        $data2 = Pengalaman::where('id', 2)->get();
        return view('mahasiswas.kuliah', compact('data1', 'data2'));
    }
}
