<?php

/* Home */
Route::get('/', 'homeController@home');
Route::get('home', 'homeController@home')->name('home');

/* Login */
Route::get('login', 'LoginController@login')->name('login');
Route::post('entrar', 'LoginController@logar')->name('entrar');
Route::get('deslogar', 'LoginController@logout')->name('deslogar');


Route::group(['middleware' => ['login']], function() {

    /* Cadastrar Paciente*/
    Route::get('cadastrarPaciente', 'cadastrarController@paciente')->name('cadastrar-paciente');
    Route::post('pacienteSalvar', 'cadastrarController@pacienteSalvar')->name('paciente-salvar');
    Route::get('pacienteListar', 'cadastrarController@pacienteListar')->name('paciente-listar');
    Route::get('pacienteEditar/{id}', 'cadastrarController@pacienteEditar')->name('paciente-editar');
    Route::get('pacienteExcluir/{id}', 'cadastrarController@pacienteExcluir')->name('paciente-excluir');
    Route::get('pacienteVisualizar/{id}', 'cadastrarController@pacienteVisualizar')->name('paciente-visualizar');
    Route::post('pacienteAtualizar/{id}', 'cadastrarController@pacienteAtualizar')->name('paciente-atualizar');
    Route::get('FichaPaciente/{id}', 'cadastrarController@Ficha')->name('FichaPaciente');

    /* Cadastrar Funcionário*/
    Route::get('cadastrarFuncionario', 'cadastrarController@funcionario')->name('cadastrar-funcionario');
    Route::post('funcionarioSalvar', 'cadastrarController@funcionarioSalvar')->name('funcionario-salva');
    Route::get('funcionarioListar', 'cadastrarController@funcionarioListar')->name('funcionario-listar');
    Route::get('funcionarioEditar/{id}', 'cadastrarController@funcionarioEditar')->name('funcionario-editar');
    Route::get('funcionarioExcluir/{id}', 'cadastrarController@funcionarioExcluir')->name('funcionario-excluir');
    Route::get('funcionarioVisualizar/{id}', 'cadastrarController@funcionarioVisualizar')->name('funcionario-visualizar');
    Route::post('funcionarioAtualizar/{id}', 'cadastrarController@funcionarioAtualizar')->name('funcionario-Atualizar');

    /* Consulta */
    Route::get('cadastrarConsulta', 'consultaController@paciente')->name('consulta');
    Route::get('consultaSalvar', 'consultaController@consultaSalvar')->name('consultaSalvar');
    Route::get('consultaListar', 'consultaController@consultaListar')->name('consultaListar');
    Route::get('consultaEditar/{id}', 'consultaController@consultaEditar')->name('consultaEditar');
    Route::get('consultaExcluir/{id}', 'consultaController@consultaExcluir')->name('consultaExcluir');
    Route::get('consultaVisualizar/{id}', 'consultaController@consultaVisualizar')->name('consultaVisualizar');
    Route::get('consultaAtualizar/{id}', 'consultaController@consultaAtualizar')->name('consultaAtualizar');

    /* Conta */
    Route::get('conta', 'contaController@pacienteconta')->name('conta');
});
