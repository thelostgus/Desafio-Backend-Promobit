<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Gustavo Michels de Camargo">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <title>Autenticação</title>
</head>

<body>
    <div class="container">
      @if (count($errors) > 0)
      <div class="alert alert-danger" role="alert">
        Ocorreu um problema:
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>  
          @endforeach
        </ul>
      </div>
      @endif
      <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Login</h2>
        <div class="text-center mb-5 text-dark">Desafio Promobit</div>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" method="POST" action="/login">
            @csrf
            <div class="mb-3">
              <p>Usuario:</p>
              <input type="text" class="form-control" name="username" aria-describedby="emailHelp"
                placeholder="User Name">
            </div>
            <div class="mb-3">
              <p>Senha:</p>
              <input type="password" class="form-control" name="password" placeholder="password">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary px-5 mb-5 w-100">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div> 
</body>

<script src="./js/jquery-3.6.0.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
</html>