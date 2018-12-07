@extends ('shared.baseprofessor')

@section('content3')

      <div class="container-fluid">

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ route('professor.telaTurmas') }}">Turmas</a>
          </li>
          <li class="breadcrumb-item active">Notas</li>
        </ol>

        <a class="btn btn-primary" id="btn"><i class="fas fa-fw fa-plus"></i> Inserir Nota</a>
        <a class="btn btn-primary" id="btn"><i class="fas fa-fw fa-plus"></i> Inserir Aluno</a><br><br>

        <div class="row">

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card mb-3">
              <div class="card-header">
                  <i class="fas fa-chart-pie"></i><a href="{{ route('professor.telaTurma1') }}"> Turma</a>
              </div>
              <div class="card-body">
                  <canvas id="myPieChart4" style="width: 600px; height: 180px;"></canvas>
                </div>
            </div>
          </div>

                 </div>

        <!-- DataTables Alunos -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Alunos </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Alunos</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Nota 3</th>
                    <th>Nota Final</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Felipe Junqueira </td>
                    <td>25</td>
                    <td>25</td>
                    <td>50</td>
                    <td>100</td>
                  </tr>
                  <tr>
                    <td>Gustavo Ramos Siqueira </td>
                    <td>10</td>
                    <td>5</td>
                    <td>20</td>
                    <td>35</td>
                  </tr>
                  <tr>
                    <td>Kamila Bençoe Pinto </td>
                    <td>50</td>
                    <td>30</td>
                    <td>20</td>
                    <td>100</td>
                  </tr>
                  <tr>
                    <td>Mariana Souza </td>
                    <td>20</td>
                    <td>0</td>
                    <td>0,5</td>
                    <td>20,5</td>
                  </tr>
                  <tr>
                    <td>Suzane Gonçalves Alves </td>
                    <td>5</td>
                    <td>10</td>
                    <td>6</td>
                    <td>21</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div><br>

        <!-- DataTables Conteudo -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Conteúdos</div>
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
                  <tr>
                    <td>Conteudo 2 </td>
                    <td>Pendente</td>
                  </tr>
                  <tr>
                    <td>Conteudo 3 </td>
                    <td>Em dia</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    @endsection