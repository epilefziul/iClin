@extends('NavBar')
@section('body')

<div class="container">


        <h2>Agenda</h2>

        <h4> Bem-vindo! {{session('usuario')}} </h4>
        <!--  -->

        <table>
            <tr>
                <th>HORÁRIOS</th>
                <th>SEGUNDA-FEIRA</th>
                <th>TERÇA-FEIRA</th>
                <th>QUARTA-FEIRA</th>
                <th>QUINTA-FEIRA</th>
                <th>SEXTA-FEIRA</th>
                <th>SÁBADO</th>
            </tr>
            <tr>
                <td class="hora">8H00 ás 10H00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="hora">10H00 ás 12H00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="hora">14H00 ás 16H00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="hora">16H00 ás 18H00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="hora">18H00 ás 20H00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="hora">20H00 ás 22H00</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>

    <!-- <li class="active"><a href={{ route( 'conta') }}>Conta</a></li>
    <li><a href={{ route( 'deslogar') }}>Deslogar</a></li> -->

    @endsection

    @section('deslogar')
        <li><a href={{ route('deslogar') }}> <span class="glyphicon glyphicon-log-in"></span> Deslogar</a></li>
    @endsection

    @push('css', '<link rel="stylesheet" type="text/css" href="' . asset('assets/css/conta.css'). '">') <!-- Concatenação -->