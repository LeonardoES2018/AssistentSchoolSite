@extends ('shared.basealuno')

@section('content2')
      <div class="container-fluid">

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ url('/aluno/inicial') }}">Área do aluno</a>
          </li>
          <li class="breadcrumb-item active">Inicial</li>
        </ol>

        <!-- Gráficos de notas -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Média das notas</div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Turmas registradas</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Sala</th>
                    <th>Professor</th>
                    <th>Descrição</th>
                    <th>Instituição</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01</td>
                    <td>Gustavo Ramos Siqueira</td>
                    <td>Docente da disciplina de Biologia</td>
                    <td>EEEFM "Getulio Vargas"</td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>Mariana Souza</td>
                    <td>Docente da disciplina de Matemática</td>
                    <td>EEEFM "Benício Gonçalves"</td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>Suzane Gonçalves Alves</td>
                    <td>Docente da disciplina de Geografia</td>
                    <td>EEEFM "Florentino Avidos"</td>
                  </tr>
                  <tr>
                    <td>04</td>
                    <td>Kamila Bençoe Pinto</td>
                    <td>Docente da disciplina de Ciências</td>
                    <td>EMEF "Maria Augusta Tavares"</td>
                  </tr>
                  <tr>
                    <td>05</td>
                    <td>Felipe Junqueira</td>
                    <td>Docente da matéria de Informática Básica</td>
                    <td>Microlins</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      @endsection