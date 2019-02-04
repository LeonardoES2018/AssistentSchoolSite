@extends ('shared.basealuno')

@section('content2')
<div class="container-fluid">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/aluno/professor') }}">Professores</a>
                    </li>
                    <li class="breadcrumb-item active">Aluno</li>
                </ol>

                <!-- Cards das matérias-->
                <div class="row">

                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="mr-5">Docente da disciplina de Biologia</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="{{ url('/aluno/situacao') }}">
                                <span class="float-left">Gustavo Ramos Siqueira</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="mr-5">Docente da disciplina de Matemática</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="{{ url('/aluno/situacao') }}">
                                <span class="float-left">Mariana Souza</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="mr-5">Docente da disciplina de Geografia</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="{{ url('/aluno/situacao') }}">
                                <span class="float-left">Suzane Gonçalves Alves</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="mr-5">Docente da disciplina de Ciências</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="{{ url('/aluno/situacao') }}">
                                <span class="float-left">Kamila Bençoe Pinto</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <div class="mr-5">Docente da matéria de Informática Básica</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="{{ url('/aluno/situacao') }}">
                                <span class="float-left">Felipe Junqueira</span>
                            </a>
                        </div>
                    </div>

@endsection