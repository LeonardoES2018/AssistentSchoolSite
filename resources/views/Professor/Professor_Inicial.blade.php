@extends ('shared.baseprofessor')

@section('content3')
<div class="container-fluid">

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ route('professor.inicialProfessor') }}">Inicio</a>
  </li>
  <a li class="breadcrumb-item active" href="{{ route('professor.telaTurmas') }}">Turmas</li>

</ol>
<a class="btn btn-primary" id="btnModal">Cadastrar Disciplina</a><br><br>

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
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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

</div>
@endsection