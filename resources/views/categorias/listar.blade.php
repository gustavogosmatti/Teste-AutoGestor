@extends('shared.base')
@section('content')
    <h3>Categorias</h3>
    @can('create', App\Categoria::class)
        <a class="btn btn-success">Incluir</a>
        <br>
        <br>
    @endcan

    <table id="table_listar" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Cód. Categoria</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>000001</td>
                <td>Hatch</td>
                <td>
                    @can('update', App\Categoria::class)
                        <a href="" class="btn btn-warning">Editar</a>
                    @endcan
                    @can('delete', App\Categoria::class)
                        <a href="" class="btn btn-danger">Excluir</a>
                    @endcan
                </td>
            </tr>
            <tr>
                <td>000002</td>
                <td>Sedan</td>
                <td>
                    @can('update', App\Categoria::class)
                        <a href="" class="btn btn-warning">Editar</a>
                    @endcan
                    @can('delete', App\Categoria::class)
                        <a href="" class="btn btn-danger">Excluir</a>
                    @endcan
                </td>
            </tr>
            <tr>
                <td>000003</td>
                <td>Picape</td>
                <td>
                    @can('update', App\Categoria::class)
                        <a href="" class="btn btn-warning">Editar</a>
                    @endcan
                    @can('delete', App\Categoria::class)
                        <a href="" class="btn btn-danger">Excluir</a>
                    @endcan
                </td>
            </tr>
            <tr>
                <td>000004</td>
                <td>SUV</td>
                <td>
                    @can('update', App\Categoria::class)
                        <a href="" class="btn btn-warning">Editar</a>
                    @endcan
                    @can('delete', App\Categoria::class)
                        <a href="" class="btn btn-danger">Excluir</a>
                    @endcan
                </td>
            </tr>

        </tbody>
        <tfoot>
            <tr>
                <th>Categoria</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
        </tfoot>
    </table>
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Voltar</a>
    <script>
        $(document).ready(function() {
            $('#table_listar').DataTable();
        });
    </script>
@endsection
