<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function listar(){
        $this->authorize('view', Produto::class);
        return view('produtos.listar');
    }
}
