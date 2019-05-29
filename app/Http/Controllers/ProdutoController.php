<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Model\Produto;

class ProdutoController extends Controller
{
    //
    public function index(){
        $produtos = Produto::All();
        return view('home',compact('produtos'));
                    
    }
}
