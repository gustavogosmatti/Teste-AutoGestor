@extends('shared.base')
@section('content')
    @can('create', App\Usuario::class)
        <div class="card-header"><a class="btn btn-danger btn-lg btn-block" href="{{ route('listar') }}">Usuários</a></div>
    @endcan
    @can('view', App\Produto::class)
        <div class="card-header"><a class="btn btn-secondary btn-lg btn-block" href="{{ route('listarProdutos') }}">Manter
                Produtos</a>
        </div>
    @endcan
    @can('view', App\Categoria::class)
        <div class="card-header"><a class="btn btn-danger btn-lg btn-block" href="{{ route('listarCategorias') }}">Manter
                Categorias</a></div>
    @endcan
    @can('view', App\Marcas::class)
        <div class="card-header"><a class="btn btn-success btn-lg btn-block" href="{{ route('listarMarcas') }}">Manter
                Marcas</a></div>
    @endcan
@endsection
