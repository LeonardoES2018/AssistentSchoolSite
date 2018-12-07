@extends ('shared.basealuno')

@section('content2')
<div class="container-fluid">

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ route('aluno.TelaPrefossor') }}">Turmas</a>
          </li>
          <li class="breadcrumb-item active">Gustavo Ramos Siqueira</li>
        </ol>

        <!-- DataTables Alunos -->
        <div class="card mb-2">
          <div class="card-header">
            <i class="fas fa-table"></i>
           Notas </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>25</td>
                    <td>25</td>
                    
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
                    <td>Em Andamento</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection