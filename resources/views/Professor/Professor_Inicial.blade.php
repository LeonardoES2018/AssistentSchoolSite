@extends ('shared.baseprofessor')

@section('content3')
<div class="container-fluid">

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ route('professor.inicialProfessor') }}">Inicio</a>
  </li>
  <a li class="breadcrumb-item active" href="{{ route('professor.telaTurmas') }}">Turmas</li>

</ol>
<a class="btn btn-primary" data-toggle="modal" data-target="#DisciplinaModal">Cadastrar Disciplina</a><br><br>

<!-- Area Chart Example-->
<div class="row">

  <div class="col-xl-3 col-sm-6 mb-3">
    <i class="fas fa-chart-area"></i>
    Turma 1
    <canvas id="myAreaChart" style="width: 600px; height: 180px;"></canvas>
    <div class="card-footer small text-muted"></div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3">
    <i class="fas fa-chart-area"></i>
    Turma 2
    <canvas id="myAreaChart2" style="width: 600px; height: 180px;"></canvas>
    <div class="card-footer small text-muted"></div>
  </div>

  <div class="col-xl-3 col-sm-6 mb-3">
    <i class="fas fa-chart-area"></i>
    Turma 3
    <canvas id="myAreaChart3" style="width: 600px; height: 180px;"></canvas>
    <div class="card-footer small text-muted"></div>
  </div><br>

</div>

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Turma 1</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="tableTurmas" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Conteúdos</th>
            <th>Situação</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Conteudo 1 </td>
            <td>Em dia</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>

<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Disciplinas</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="tableDisciplinas" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Descrição</th>
            <th>Data Início</th>
            <th>Data Fim</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- FIM CARD -->
</div>



<!-- Modal Cadastrar Disciplina -->
<div class="modal fade" id="DisciplinaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastrar Disciplina</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

      <div class="modal-body">
        
      <form method="POST" action="{{ route('disciplina.store') }}">
        <div class="form-group col-md-12">

          <div class="col-md-12">
            <label for="descricao">Nome da disciplina</label>
            <input type="text" id="descricao" class="form-control" placeholder="Digite o nome da sua disciplina" required="required" autofocus="autofocus" >
          </div>
          
            <div class="col-md-6">
            <label for="dtInicio">Data início</label>
            <input type="date" id="dtInicio" class="form-control" required="required" autofocus="autofocus">
            </div>

            <div class="col-md-6">
            <label for="dtFim">Data fim</label>
            <input type="date" id="dtFim" class="form-control" placeholder="Digite a data de termino da disciplina" required="required" autofocus="autofocus" >
            </div>

        </div>
        </form>
         
      </div>

        <div class="modal-footer">
          <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
          <a type="submit" class="btn btn-primary">Cadastrar</a>
        </div>
      </div>
    </div>
  </div>
@endsection