<?php

Route::get('/', function () {
    return view('auth/login');
});

// Views Professor
Route::view('/professor/inicial', 'Professor.Professor_Inicial');
Route::view('/professor/turma', 'professor.Professor_Turma');
Route::view('/professor/turmas', 'professor.Professor_TurmaGeral');
Route::view('/professor/conteudo', 'professor.Professor_Conteudo');

// CRUD Perfil Professor
Route::post('/disciplinaCadastrar', 'DisciplinaController@create')->name('disciplina.create');
Route::get('/professor/inicial', 'DisciplinaController@List')->name('disciplina.List');
//Route::get('/professor/editar/{id}', 'DisciplinaController@edit')->name('disciplina.edit');
Route::post('/professor/inicial/{id}', 'DisciplinaController@update')->name('disciplina.update');
Route::get('/professor/deletar/{id}', 'DisciplinaController@destroy')->name('disciplina.destroy');

// Views Aluno
Route::view('/aluno/inicial', 'Aluno.Aluno_Inicial');
Route::view('/aluno/professor', 'Aluno.Aluno_Professor');
Route::view('/aluno/notas', 'Aluno.Aluno_Notas');
Route::view('/aluno/situacao', 'Aluno.Aluno_Situacao');

Route::get('/entrar', 'HomeController@perfil')->name('home.perfil');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('professors', 'ProfessorController');
Route::resource('disciplinas', 'DisciplinaController');
Route::resource('alunos', 'AlunoController');
Route::resource('salas', 'SalaController');






