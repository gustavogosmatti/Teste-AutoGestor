@extends('shared.base')
@section('content')
    <div class="panel panel-default">
        <h3>Lista de Usuários</h3>
        <div class="row">
            <div class="col-md-12">
                <table id="table_listar" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Login</th>
                            <th>Cargo</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->nome }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->login }}</td>
                                <td>{{ $usuario->cargo }}</td>
                                <td>
                                    @can('update', App\Usuario::class)
                                        <a href="{{ route('editar', $usuario->id) }}" class="btn btn-warning">Editar</a>
                                    @endcan
                                    @can('delete', App\Usuario::class)
                                        @if ($usuario->cargo != 'Administrador')
                                            <a href="{{ route('excluir', $usuario->id) }}" class="btn btn-danger">Excluir</a>
                                        @endif
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#table_listar').DataTable();
        });
    </script>
@endsection
