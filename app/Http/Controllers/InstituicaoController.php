<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Instituicao;
use App\User;


class InstituicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = DB::table('instituicaos')->select('nomeInstituicao')->where('id', '=', Auth()->user->id);
        $instituicoes = Instituicao::where('idUsuario', User::id())->get();
        return view('home.perfil', compact('instituicoes'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {
        //$users = DB::table('instituicaos')->select('nomeInstituicao')->where('id', '=', Auth()->user->id);
        //$instituicoes = DB::table('instituicaos')->select('nomeInstituicao')->where('idUsuario = ?', [1])->get();
        $instituicoes = Instituicao::select('nomeInstituicao')->where('user_id = ?', [1])->get();
        //$instituicoes = Instituicao::where('idUsuario', Auth::id())->get();
        return view('Entrar.Modal_Perfil', compact('instituicoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $dados = $request->all();
        $instituicao = Instituicao::create($dados);

        return redirect()->route('disciplina.List');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
