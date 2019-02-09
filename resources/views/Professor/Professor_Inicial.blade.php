@extends ('shared.baseprofessor')

@section('content3')
<div class="container-fluid">

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{ url('/professor/inicial') }}">Inicio</a>
  </li>
  <a li class="breadcrumb-item active" href="{{ url('/professor/turmas') }}">Turmas</li>
</ol>

<a class="btn btn-primary" data-toggle="modal" data-target="#DisciplinaModal">Cadastrar Disciplina</a><br><br>
<a class="btn btn-primary" data-toggle="modal" data-target="#IntituicaoModal">Cadastrar Instituição</a><br><br>

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
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach($disciplinas as $disciplina)
          <tr>
            <td>{{$disciplina->descricao}}</td>
            <td>{{$disciplina->dataInicio}}</td>
            <td>{{$disciplina->dataFim}}</td>
            <td>
              <a type="btn btn-primary" data-toggle="modal" href="#" data-target="#DisciplinaEditarModal{{$disciplina->id}}"><i class="fas fa-pencil-alt"></i></a>
              <a href="{{ route('disciplina.destroy', $disciplina->id)}}"><i class="fas fa-trash"></i></a>
              <a href="#"><i class="fas fa-table"></i></a>
            </td>
          </tr>

              <!-- Modal Editar Disciplina -->
              <div class="modal fade" id="DisciplinaEditarModal{{$disciplina->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Editar Disciplina</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>

                  <div class="modal-body">
                    
                  <form method="POST" action="{{ route('disciplina.update', $disciplina->id) }}">
                  {{ csrf_field() }} 
                    <div class="form-group col-md-12">

                      <div class="col-md-12">
                        <label for="id">ID</label>
                        <input name="id" type="text" class="form-control" required="required" value="{{ $disciplina->id }}" autofocus="autofocus" style="width: 50px;" readonly>
                      </div>

                      <div class="col-md-12">
                        <label for="descricao">Nome da disciplina</label>
                        <input name="descricao" type="text" class="form-control" placeholder="Digite o nome da sua disciplina" required="required" value="{{ $disciplina->descricao }}" autofocus="autofocus" >
                      </div>
                      
                        <div class="col-md-6">
                          <label for="dtInicio">Data início</label>
                          <input name="dataInicio" type="date" class="form-control" required="required" value="{{ $disciplina->dataInicio }}" autofocus="autofocus">
                        </div>

                        <div class="col-md-6">
                        <label for="dtFim">Data fim</label>
                        <input name="dataFim" type="date" class="form-control" placeholder="Digite a data de termino da disciplina" required="required" value="{{ $disciplina->dataFim }}" autofocus="autofocus" >
                        </div>
                    </div>
                      <button type="submit" class="btn btn-primary">Alterar</button>
                      <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                  </form>
                  </div>
                  </div>
                </div>
              </div>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- FIM CARD -->
</div>

<!-- Modal Cadastrar Intituicao -->
<div class="modal fade" id="IntituicaoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastrar Disciplina</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

      <div class="modal-body">
        
      <form method="POST" action="{{ route('instituicao.create') }}">
      @csrf
        <div class="form-group col-md-12">

          <div class="col-md-12">
            <label for="nomeInstituicao">Nome da Intituição</label>
          <input name="nomeInstituicao" type="text" id="nomeInstituicao" class="form-control" placeholder="Digite o nome da instituição" required="required" autofocus="autofocus" >
          </div>

          <input name="idUsuario" type="hidden" id="idUsuario" class="form-control" required="required" autofocus="autofocus" value="{{ Auth::user()->id }}" readonly>

        </div>

        <div>
          <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        <div>
      </form>
         
      </div>

        <div class="modal-footer">
          
        </div>
      </div>
    </div>
        
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
        
      <form method="POST" action="{{ route('disciplina.create') }}">
      @csrf
        <div class="form-group col-md-12">

          <div class="col-md-12">
            <label for="descricao">Nome da disciplina</label>
          <input name="descricao" type="text" id="descricao" class="form-control" placeholder="Digite o nome da sua disciplina" required="required" autofocus="autofocus" >
          </div>
          
            <div class="col-md-6">
              <label for="dtInicio">Data início</label>
              <input name="dataInicio" type="date" id="dtInicio" class="form-control" required="required" autofocus="autofocus">
            </div>

            <div class="col-md-6">
            <label for="dtFim">Data fim</label>
            <input name="dataFim" type="date" id="dtFim" class="form-control" placeholder="Digite a data de termino da disciplina" required="required" autofocus="autofocus" >
            </div>

        </div>
        <div>
          <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        <div>
      </form>
         
      </div>

        <div class="modal-footer">
          
        </div>
      </div>
    </div>
        
  </div> 

  

  
@endsection