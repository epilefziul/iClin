@extends('Nav')
@section('body')

    <form action="{{ route('entrar') }}" method="post">
        <!-- Formulário de login-->
        {{ csrf_field() }}

        @if (session('erro'))
        <!-- LOGIN ou SENHA INCORRETA -->
        <div class="alert alert-danger">
            <strong>Erro!</strong> {{session('erro')}}
        </div>
        <!-- FIM [LOGIN OU SENHA INCORRETA] -->
        @endif

        <dir id="login">
            <div class="imgcontainer">
                <img src="https://icon-icons.com/icons2/979/PNG/256/Doctor_Male_icon-icons.com_75051.png" alt="Avatar" class="avatar">
            </div>

            <div class="container-forn">
                <label for="nome"><b>Login</b></label>
                <input type="text" placeholder="Entre com seu nome" name="nome" required>

                <label for="senha"><b>Senha</b></label>
                <input type="password" placeholder="Enter com sua senha" name="senha" required>

                <button id="button-login" type="submit" class="entralbtn"><a>Entrar</a></button>
                <button id="button-cancelar" type="button" class="cancelbtn"><a href={ { route( 'home') }}>Cancel</a></button>

                <label>
                    <p>
                        <input type="checkbox" checked="checked" name="remember"> Lembre-me
                    </p>
                </label>
            </div>
        </dir>
    </form>

@endsection

@push('css', '<link rel="stylesheet" type="text/css" href="' . asset('assets/css/Login.css'). '">') <!-- Concatenação -->