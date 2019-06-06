<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="{{asset('assets/img/iclindoctor.png')}}" type="image/gif" sizes="16x16">
    <title>iClin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href=" {{asset('assets/css/cadastrar.css')}} ">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    
    <link href="bootstrap-datepicker.css" rel="stylesheet">
    <script src="bootstrap-datepicker.js"></script>
    <script src="bootstrap-datepicker.pt-BR.min.js"></script>
    
    @stack('css') <!-- Chama a pilha -->
</head>

<body>

    <nav class="navbar navbar-default" id="nav">
        <!-- nemu do site -->
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href={{ route('conta') }}>iClin</a>
                <!--  bota imagem aqui do tamanho já correto-->
                <button class="navbar-toggle glyphicon glyphicon-menu-hamburger" data-toggle="collapse" data-target="#lista_show"></button>
            </div>

            <ul id="lista_show" class="nav navbar-nav navbar-right collapse navbar-collapse">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Paciente
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li @if($menu == 1) class="active" @endif><a href={{ route('cadastrar-paciente') }}>Cadastrar Paciente</a></li>
                        <li @if($menu == 6) class="active" @endif><a href={{ route('paciente-listar') }}>Listar Paciente</a></li>
                      </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Funcionário
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li @if($menu == 2) class="active" @endif><a href={{ route('cadastrar-funcionario') }}>Cadastrar Funcionário</a></li>
                        <li @if($menu == 7) class="active" @endif><a href={{ route('funcionario-listar') }}>Listar Funcionário</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Consulta
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li @if($menu == 3) class="active" @endif><a href={{ route('consulta') }}>Cadastrar Consulta</a></li>
                        <li @if($menu == 4) class="active" @endif><a href={{ route('consultaListar') }}>Listar Consulta</a></li>
                    </ul>
                </li>

                <li @if($menu == 5) class="active" @endif><a href={{ route('conta') }}><span class="glyphicon glyphicon-user"></span> Conta</a></li>

                @yield('deslogar') <!-- para fazer o delogar aparecer -->

            </ul>
        </div>
    </nav>

@yield('body')

</body>

</html>