<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entrar;
use App\User;
use App\Instituicao;

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
       // $users = DB::select('select name from user where name = ?', name , ['nome' => $users]);

        return view('Entrar.Modal_Perfil');
    }

    public function login()
    {
        return view('Auth.login');
    }

    public function autenticacao()
    {
        $p = User::all();
        return View::make('Entrar.Modal_Perfil', ['type' => $p]);
    }
    
}
