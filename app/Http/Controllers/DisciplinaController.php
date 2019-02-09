<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciplina;
use App\Auth;
//use App\Professor;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disciplina = Disciplina::all();
        return response()->json(['data'=>$disciplina, 'status'=>true]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $dados = $request->all();
        $disciplina = Disciplina::create($dados);

        return redirect()->route('disciplina.List');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function List()
    {
        $disciplinas = Disciplina::all();
        return view('Professor.Professor_Inicial', compact('disciplinas'));
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
        $dados = Auth::user()->id;
        $disciplina = Disciplina::create($dados);

        if($disciplina){
            return response()->json(['data'=>$disciplina, 'status'=>true]);
        } else {
            return response()->json(['data'=>'Erro ao cadastrar Disciplina', 'satus'=>false]);
        }

        /*$dados = $request->all();

        $dados = Disciplina::create([
            'descricao' => $data['descricao'],
            'dataInicio' => $data['dtInicio'],
            'dataFim' => $data['dtFim'],
        ]);

        if($disciplina){
            return response()->json(['data'=>$disciplina, 'status'=>true]);
        } else {
            return response()->json(['data'=>'Erro ao cadastrar Disciplina', 'satus'=>false]);
        }*/
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
        $disciplina = Disciplina::find($id);
        $dados = $request->all();
        $disciplina->update($dados);
        
        return redirect()->route('disciplina.List');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Disciplina::find($id)->delete();
        $disciplinas = Disciplina::all();
        return redirect()->route('disciplina.List');
    }
}
