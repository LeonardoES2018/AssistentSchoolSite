<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\User;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *return response()->json(['data'=>$aluno, 'status'=>true]);
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aluno = Aluno::all();
        return view('Aluno.Aluno_Inicial');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Aluno::create([
            'idUsuario' => $data['idUsuario'],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TelaPrefossor()
    {
        return view('Aluno.Aluno_Professor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TelaNotas()
    {
        return view('Aluno.Aluno_Notas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TelaSituacao()
    {
        return view('Aluno.Aluno_Situacao');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        $aluno = Aluno::create($dados);

        if($aluno){
            return response()->json(['data'=>$aluno, 'status'=>true]);
        } else {
            return response()->json(['data'=>'Erro ao cadastrar Aluno', 'satus'=>false]);
        }
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
