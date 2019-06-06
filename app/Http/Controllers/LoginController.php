<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller{

    public function login(){
        $dados ['home'] = 6;
        return view('login', $dados);
    }
    public function logar(Request $req){

        if ($req->nome == 'teste' && $req->senha == '123') {
            session(['usuario' => 'Luiz Teste']);
            return redirect()->route('conta');
        }
        return redirect()->route('login')->with('erro', 'Senha ou Login inválido');
    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect()->route('login'); 
    }
}
