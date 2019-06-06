<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        $dados['home'] = 5;
        return view('home', $dados);
    }
}
