@extends ('shared.basealuno')

@section('content2')
<div class="container-fluid">

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ url('/aluno/notas') }}">Notas</a>
          </li>
          <li class="breadcrumb-item active">Aluno</li>
        </ol>

        <!-- Tabela de notas -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Tabela de notas
        </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Professor</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Nota 3</th>
                    <th>Nota Final</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Gustavo Ramos Siqueira</td>
                    <td>10</td>
                    <td>5</td>
                    <td>20</td>
                    <td>35</td>
                  </tr>
                  <tr>
                    <td>Mariana Souza</td>
                    <td>20</td>
                    <td>0</td>
                    <td>0,5</td>
                    <td>20,5</td>
                  </tr>
                  <tr>
                    <td>Suzane Gonçalves Alves</td>
                    <td>5</td>
                    <td>10</td>
                    <td>6</td>
                    <td>21</td>
                  </tr>
                  <tr>
                    <td>Kamila Bençoe Pinto</td>
                    <td>50</td>
                    <td>30</td>
                    <td>20</td>
                    <td>100</td>
                  </tr>
                  <tr>
                    <td>Felipe Junqueira</td>
                    <td>25</td>
                    <td>25</td>
                    <td>50</td>
                    <td>100</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        @endsection