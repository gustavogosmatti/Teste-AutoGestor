<?php

namespace App\Http\Controllers;

use App\Marcas;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    public function listar(){
        $this->authorize('view', Marcas::class);
        return view('marcas.listar');
    }
}
