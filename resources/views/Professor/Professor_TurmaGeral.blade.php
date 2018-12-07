@extends ('shared.baseprofessor')

@section('content3')

<div class="container-fluid">

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ route('professor.telaTurmas') }}">Turmas</a>
  </li>
  <li class="breadcrumb-item active">Desempenho</li>
</ol>

<div class="row">

<div class="col-xl-3 col-sm-6 mb-3">

  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-chart-pie"></i>
      <a href="{{ route('professor.telaTurma1') }}">Turma 1</a>
      </div>
    <div class="card-body">
      <canvas id="myPieChart" style="width: 600px; height: 180px;"></canvas>
    </div>
    </div>
</div>


<div class="col-xl-3 col-sm-6 mb-3">
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-chart-pie"></i><a href="{{ route('professor.telaTurma1') }}"> Turma 2</a>
    </div>
    <div class="card-body">
      <canvas id="myPieChart2" style="width: 600px; height: 180px;"></canvas>
    </div>
    </div>
</div>

<div class="col-xl-3 col-sm-6 mb-3">
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-chart-pie"></i><a href="{{ route('professor.telaTurma1') }}"> Turma 3</a>
    </div>
    <div class="card-body">
      <canvas id="myPieChart3" style="width: 600px; height: 180px;"></canvas>
    </div>
  </div>
</div>

</div>
</div>
@endsection