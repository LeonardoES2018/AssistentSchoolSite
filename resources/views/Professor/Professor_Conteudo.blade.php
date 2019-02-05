@extends ('shared.baseprofessor')

@section('content3')
    <div class="container-fluid">

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ url('/professor/conteudo') }}">Conteudos</a>
          </li>
        </ol>

        <!-- Tabela conteúdo -->
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
    </div>

  @endsection