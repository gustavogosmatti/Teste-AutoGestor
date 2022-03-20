@extends('shared.base')

@section('content')
<div class="panel panel-default">

<div class="panel-heading"><h3>Atualizar usuário</h3></div>
<div class="panel-body">
<form class="form-horizontal" method="post" action="{{route ('deletar', $usuario->id)}}">
{{ csrf_field() }}
  <div class="form-group">
    <label for="nome" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" value="{{$usuario->nome}}" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Digite seu email" value="{{$usuario->email}}" readonly>
    </div>
  </div>
    <div class="form-group">
    <label for="cargo" class="col-sm-2 control-label">Cargo</label>
    <div class="col-sm-10">
      <select class="form-control" name="cargo" value="{{$usuario->cargo}}" readonly>
        <option>{{$usuario->cargo}}</option>
      </select>
    </div>
  </div>
  <hr>
  <div class="form-group">
    <label for="login" class="col-sm-2 control-label">Login</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="login" placeholder="Digite seu login" value="{{$usuario->login}}" readonly>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <a href="{{ route('listar') }}" class="btn btn-default">Cancelar</a>
        <button type="submit" class="btn btn-danger">Excluir</button>
    </div>
  </div>
</form>
</div>
</div>
@endsection