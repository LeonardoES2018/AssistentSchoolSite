<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrar;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function Perfil()
    {
        return view('Entrar.Modal_Perfil');
    }

    public function login()
    {
        return view('Auth.login');
    }
    
}
