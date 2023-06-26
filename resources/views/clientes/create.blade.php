@extends('clientes.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Criar Novos Clientes</div>
        <div class="card-body">

            <form action="{{ url('cliente') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>CPF</label></br>
                <input type="text" name="cpf" id="cpf" class="form-control"></br>
                <label>Telefone</label></br>
                <input type="text" name="telefone" id="telefone" class="form-control"></br>
                <label>E-mail</label></br>
                <input type="email" name="email" id="email" class="form-control"></br>
                <label>Data de Nascimento</label></br>
                <input type="text" name="data_nasc" id="data_nasc" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
