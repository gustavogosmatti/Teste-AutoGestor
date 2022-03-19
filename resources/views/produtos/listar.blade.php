@extends('shared.base')
@section('content')
<h3>Produtos</h3>
    <table id="table_listar" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Marca</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>HB20</td>
                <td>Hyundai</td>
                <td>Hatch</td>
            </tr>
            <tr>
                <td>Virtus</td>
                <td>Volkswagen</td>
                <td>Sedan</td>
            </tr>
            <tr>
                <td>Strada Endurance</td>
                <td>Fiat</td>
                <td>Picape</td>
            </tr>
            <tr>
                <td>Renegade</td>
                <td>Jeep</td>
                <td>SUV</td>
            </tr>

        </tbody>
        <tfoot>
            <tr>
                <th>Produto</th>
                <th>Marca</th>
                <th>Categoria</th>
            </tr>
        </tfoot>
    </table>
    <script>
        $(document).ready(function() {
            $('#table_listar').DataTable();
        });
    </script>
@endsection
