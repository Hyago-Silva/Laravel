@extends('clientes.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Clientes</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $cliente->name }}</h5>
        <p class="card-text">Cpf : {{ $cliente->cpf }}</p>
        <p class="card-text">Telefone : {{ $cliente->telefone }}</p>
        <p class="card-text">Email : {{ $cliente->email }}</p>
        <p class="card-text">data_nasc : {{ $cliente->data_nasc }}</p>
  </div>
    </hr>
  </div>
</div>
