<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contaController extends Controller
{
    public function pacienteconta(){
        $dados['menu'] = 5; // Aciona o Active do navbar
        return view('conta', $dados);
    }
}
