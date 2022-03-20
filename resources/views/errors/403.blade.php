@extends('shared.base')
@section('content')
<h3>Você não tem permissão para acessar este recurso</h3>
<a href="{{ route('dashboard') }}" class="btn btn-warning">Voltar</a>
@endsection