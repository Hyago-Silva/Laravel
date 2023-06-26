@extends('clientes.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Editar Cliente</div>
  <div class="card-body">

      <form action="{{ url('cliente/' .$clientes->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$clientes->id}}" id="id" />
        <label>Nome</label></br>
        <input type="text" name="name" id="name" value="{{$clientes->name}}" class="form-control"></br>
        <label>CPF</label></br>
        <input type="text" name="cpf" id="cpf" value="{{$clientes->cpf}}" class="form-control"></br>
        <label>Telefone</label></br>
        <input type="text" name="telefone" id="telefone" value="{{$clientes->telefone}}" class="form-control"></br>
        <label>E-mail</label></br>
        <input type="email" name="email" id="email" value="{{$clientes->email}}" class="form-control"></br>
        <label>Data de Nascimento</label></br>
        <input type="text" name="data_nasc" id="data_nasc" value="{{$clientes->data_nasc}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
