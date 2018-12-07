<?php

Route::get('/', function () {
    return view('auth/login');
});

Route::resource('professor', 'ProfessorController');
Route::resource('disciplina', 'DisciplinaController');
Route::resource('aluno', 'AlunoController');
Route::resource('sala', 'SalaController');
Route::resource('entrar', 'HomeController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/entrar', 'HomeController@perfil');

Route::get('/professor', 'AlunoController@TelaPrefossor')->name('aluno.TelaPrefossor');

Route::get('/notas', 'AlunoController@TelaNotas')->name('aluno.TelaNotas');

Route::get('/situacao', 'AlunoController@TelaSituacao')->name('aluno.TelaSituacao');

Route::get('/inicial', 'ProfessorController@inicialProfessor')->name('professor.inicialProfessor');

Route::get('/turmas', 'ProfessorController@telaTurmas')->name('professor.telaTurmas');

Route::get('/conteudo', 'ProfessorController@telaConteudo')->name('professor.telaConteudo');

Route::get('/turma1', 'ProfessorController@telaTurma1')->name('professor.telaTurma1');






