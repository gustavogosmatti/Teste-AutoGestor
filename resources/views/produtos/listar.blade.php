@extends('shared.base')
@section('content')
    <h3>Produtos</h3>
    @can('create', App\Produto::class)
        <a class="btn btn-success">Incluir</a>
        <br>
        <br>
    @endcan

    <table id="table_listar" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Marca</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>HB20</td>
                <td>Hyundai</td>
                <td>Hatch</td>
                <td>
                    @can('update', App\Produto::class)
                        <a href="" class="btn btn-warning">Editar</a>  
                    @endcan
                    @can('delete', App\Produto::class)
                        <a href="" class="btn btn-danger">Excluir</a>
                    @endcan
                </td>
            </tr>
            <tr>
                <td>Virtus</td>
                <td>Volkswagen</td>
                <td>Sedan</td>
                <td>
                    @can('update', App\Produto::class)
                        <a href="" class="btn btn-warning">Editar</a>
                    @endcan
                    @can('delete', App\Produto::class)
                        <a href="" class="btn btn-danger">Excluir</a>
                    @endcan
                </td>
            </tr>
            <tr>
                <td>Strada Endurance</td>
                <td>Fiat</td>
                <td>Picape</td>
                <td>
                    @can('update', App\Produto::class)
                        <a href="" class="btn btn-warning">Editar</a>
                    @endcan
                    @can('delete', App\Produto::class)
                        <a href="" class="btn btn-danger">Excluir</a>
                    @endcan
                </td>
            </tr>
            <tr>
                <td>Renegade</td>
                <td>Jeep</td>
                <td>SUV</td>
                <td>
                    @can('update', App\Produto::class)
                        <a href="" class="btn btn-warning">Editar</a>
                    @endcan
                    @can('delete', App\Produto::class)
                        <a href="" class="btn btn-danger">Excluir</a>
                    @endcan
                </td>
            </tr>

        </tbody>
        <tfoot>
            <tr>
                <th>Produto</th>
                <th>Marca</th>
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
