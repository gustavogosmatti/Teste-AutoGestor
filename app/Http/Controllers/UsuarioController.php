<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function listar()
    {
        $this->authorize('view', Usuario::class);
        $usuarios = Usuario::all();
        return view('usuarios.listar', compact('usuarios'));
    }

    public function editar($id)
    {
        $this->authorize('update', Usuario::class);

        $usuario = Usuario::find($id);
        return view('usuarios.editar', compact('usuario'));
    }

    public function atualizar(Request $request, $id)
    {
        $this->authorize('update', Usuario::class);
        
        $dados = $request->all();
        $usuario = Usuario::find($id);

        if(!$dados['senha']){
            $senha_antiga = $usuario->senha;
            $dados['senha'] = $senha_antiga;
            $usuario->update($dados);
        }else{
            $senha_nova = Hash::make($dados['senha']);
            $dados['senha'] = $senha_nova;
            $usuario->update($dados);
        }

        return redirect()->route('listar');
    }

    public function registrar()
    {
        $this->authorize('create', Usuario::class);
        return view('usuarios.registrar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();
        $dados['senha'] = bcrypt($dados['senha']);
        Usuario::create($dados);

        return redirect()->route('listar');
    }
    public function excluir($id)
    {
        $this->authorize('delete', Usuario::class);

        $usuario = Usuario::find($id);
        return view('usuarios.excluir', compact('usuario'));
    }
    public function deletar(Request $request, $id){
        $this->authorize('delete', Usuario::class);
        
        $dados = $request->all();
        $usuario = Usuario::find($id);
        $usuario->delete($dados);
        return redirect()->route('listar');
    }
}
