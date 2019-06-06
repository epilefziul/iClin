<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="{{asset('assets/img/estero.png')}}" type="image/gif" sizes="16x16">
    <meta charset="UTF-8" />
    <title>iClin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @stack('css') <!-- Chama a pilha -->
    <style>

        .navbar-default{
            margin :0;
        }
        #foto {
            margin-top: 2px;
            position: absolute;
        }
    </style>
</head>

<body>


    <nav class="navbar navbar-default" id="nav">
        <!-- menuu do site -->
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href={{ route( 'home') }}>iClin</a>
                <!--  bota imagem aqui do tamanho já correto-->
                <button class="navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#lista_show"></button>
            </div>

            <ul id="lista_show" class="nav navbar-nav navbar-right collapse navbar-collapse">
                <li @if($home == 5) class="active" @endif><a href={{ route( 'home') }}>Home</a></li>
                <li @if($home == 6) class="active" @endif><a href={{ route( 'login') }}>Login</a></li>
            </ul>
        </div>
    </nav>

@yield('body')

</body>

</html>