<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function listar(){
        $this->authorize('view', Categoria::class);
        return view('categorias.listar');
    }
}
