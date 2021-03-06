<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Gustavo Michels de Camargo">
    <link rel="icon" href="/image/icon.png" type="image/gif" sizes="16x16">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <title>@yield("title")</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4 justify-content-center p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a href="/home" class="nav-link{{ $currentPage == "home" ? " active" : "" }}" aria-current="page">Home</a></li>
                        <li class="nav-item"><a href="/product" class="nav-link{{ $currentPage == "product" ? " active" : "" }}">Produtos</a></li>
                        <li class="nav-item"><a href="/tag" class="nav-link{{ $currentPage == "tag" ? " active" : "" }}">Tags</a></li>
                    </ul>
                </div>
                <div class="col-4" style="margin-top: 10px">
                    <a href="https://github.com/gusscamargo" class="btn btn-primary" target="_blank">
                        <i class="small material-icons">code</i>
                        Meu Github
                    </a>
                    <a href="https://www.linkedin.com/in/gustavo-michels-de-camargo/" class="btn btn-primary" target="_blank">
                        <i class="small material-icons">account_circle</i>
                        Meu LinkedIn 
                    </a>
                    <a href="/logout" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </header>
    <main class="container">
        @yield('content')  
    </main>


</body>

<script src="/js/jquery-3.6.0.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</html>