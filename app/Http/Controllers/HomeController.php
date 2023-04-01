<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Dashboard
        $user = Auth::user();
        return view('mahasiswas.dashboard',['user'=>$user]);
    }
    public function dashboard(){
        $user = Auth::user();
        return view('mahasiswas.dashboard', ['user'=>$user]);
    }
}
