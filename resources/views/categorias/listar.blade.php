@extends('shared.base')
@section('content')
<table id="table_listar" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Cód. Categoria</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>000001</td>
            <td>Hatch</td>
        </tr>
        <tr>
            <td>000002</td>
            <td>Sedan</td>
        </tr>
        <tr>
            <td>000003</td>
            <td>Picape</td>
        </tr>
        <tr>
            <td>000004</td>
            <td>SUV</td>
        </tr>

    </tbody>
    <tfoot>
        <tr>
            <th>Produto</th>
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
