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
    @endcan
    @can('view', App\Produto::class)
        <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
            <div class="card-header"><a class="btn btn-secondary" href="{{ route('listarProdutos') }}">Manter Produtos</a>
            </div>
        </div>
    @endcan
    @can('view', App\Categoria::class)
        <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
            <div class="card-header"><a class="btn btn-danger" href="{{ route('listarCategorias') }}">Manter Categorias</a></div>
        </div>
    @endcan
    @can('view', App\Marcas::class)
        <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
            <div class="card-header"><a class="btn btn-success" href="{{ route('listarMarcas') }}">Manter Marcas</a></div>
        </div>
    @endcan
@endsection
