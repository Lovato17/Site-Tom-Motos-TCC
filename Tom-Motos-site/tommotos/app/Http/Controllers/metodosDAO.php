<?php

namespace App\Http\Controllers;
use App\Models\tb_usuario;
use App\Models\tb_produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class metodosDAO extends Controller
{
    public function home(){
        $Produto = tb_produto::get();
        return view('home',['produtos'], compact('Produto'));

    }
    public function contato(){
        return view('contato');
    }
   
}
