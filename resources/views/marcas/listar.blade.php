@extends('shared.base')
@section('content')
    <h3>Marcas</h3>
    @can('create', App\Marcas::class)
        <a class="btn btn-success">Incluir</a>
        <br>
        <br>
    @endcan

    <table id="table_listar" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Cód. Marca</th>
                <th>Marca</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>000001</td>
                <td>Hyundai</td>
                <td>
                    @can('update', App\Marcas::class)
                        <a href="" class="btn btn-warning">Editar</a>
                    @endcan
                    @can('delete', App\Marcas::class)
                        <a href="" class="btn btn-danger">Excluir</a>
                    @endcan
                </td>

            </tr>
            <tr>
                <td>000002</td>
                <td>Volkswagen</td>
                <td>
                    @can('update', App\Marcas::class)
                        <a href="" class="btn btn-warning">Editar</a>
                    @endcan
                    @can('delete', App\Marcas::class)
                        <a href="" class="btn btn-danger">Excluir</a>
                    @endcan
                </td>
            </tr>
            <tr>
                <td>000003</td>
                <td>Fiat</td>
                <td>
                    @can('update', App\Marcas::class)
                        <a href="" class="btn btn-warning">Editar</a>
                    @endcan
                    @can('delete', App\Marcas::class)
                        <a href="" class="btn btn-danger">Excluir</a>
                    @endcan
                </td>

            </tr>
            <tr>
                <td>000004</td>
                <td>Jeep</td>
                <td>
                    @can('update', App\Marcas::class)
                        <a href="" class="btn btn-warning">Editar</a>
                    @endcan
                    @can('delete', App\Marcas::class)
                        <a href="" class="btn btn-danger">Excluir</a>
                    @endcan
                </td>

            </tr>

        </tbody>
        <tfoot>
            <tr>
                <th>Marcas</th>
                <th>Marca</th>
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
