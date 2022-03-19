@extends('shared.base')
@section('content')
<h3>Marcas</h3>
    <table id="table_listar" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Cód. Marca</th>
                <th>Marca</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>000001</td>
                <td>Hyundai</td>

            </tr>
            <tr>
                <td>000002</td>
                <td>Volkswagen</td>
            </tr>
            <tr>
                <td>000003</td>
                <td>Fiat</td>

            </tr>
            <tr>
                <td>000004</td>
                <td>Jeep</td>

            </tr>

        </tbody>
        <tfoot>
            <tr>
                <th>Produto</th>
                <th>Marca</th>

            </tr>
        </tfoot>
    </table>
    <script>
        $(document).ready(function() {
            $('#table_listar').DataTable();
        });
    </script>
@endsection
