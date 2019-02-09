<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Perfil de acesso ao usuário</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link rel="icon" type="imagem/png" href="{{ asset('img/logo.png') }}"/>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Selecione Seu Perfil</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="nome" class="form-control" required="required" autofocus="autofocus" value="{{ Auth::user()->name }}" readonly>
              <label for="nome">Usuário</label>
            </div>
          </div>
          <div class="form-group">
          @if (Auth::user()->type == 'p')
          {!!  Form::select('type', ['p' => 'Professor' ], 'p', ['class' => 'form-control' ]) !!}
          @else
          {!!  Form::select('type', ['a' => 'Aluno' ], 'p', ['class' => 'form-control' ]) !!}
          @endif
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <select class="form-control">
                <option value="ceet">CEET Vasco Coutinho</option>
                <option value="sen">Senac</option>
                <option value="ses">Sesi</option>
              </select>
            </div>
          </div><br>

          @if (Auth::user()->type == 'p')
          <a class="btn btn-primary btn-block" href="{{ url('/professor/inicial') }}">Entrar</a>
          @else          
          <a class="btn btn-primary btn-block" href="{{ url('/aluno/inicial') }}">Entrar</a>
          @endif
        </form>
        <div class="text-center">
            <a class="d-block small" href="{{ route('login') }}">Voltar</a>
          </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/js/js1.js"></script>

</body>

</html>