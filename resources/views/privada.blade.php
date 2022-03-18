@extends('shared.base')

@section('content')
    @can('create', App\Usuario::class)
        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
            <div class="card-header"><a class="btn btn-primary" href="{{ route('registrar') }}">Cadastrar novo usuário</a>
            </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
            <div class="card-header"><a class="btn btn-danger" href="{{ route('listar') }}">Listar Usuários</a>
            </div>
        </div>
    @elsecan('view', App\Produto::class)
        <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
            <div class="card-header"><a class="btn btn-secondary" href="{{ route('listarProdutos') }}">Manter Produtos</a></div>
        </div>
    @else
        <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
            <div class="card-header">Manter Categorias</div>
        </div>
        <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
            <div class="card-header">Manter Marcas</div>
        </div>
    @endcan
@endsection
