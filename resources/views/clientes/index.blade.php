@extends('clientes.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Gerenciador de Clientes</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/cliente/create') }}" class="btn btn-success btn-sm" title="Cadastrar Novo Cliente">
                            Cadastrar Novo
                        </a>
                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Id</th>
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th>Telefone</th>
                                        <th>E-mail</th>
                                        <th>Data de Nascimento</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->cpf }}</td>
                                            <td>{{ $item->telefone }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->data_nasc }}</td>

                                            <td>
                                                <a href="{{ url('/cliente/' . $item->id) }}" title="View Cliente"><button
                                                        class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                            aria-hidden="true"></i> Visualizar</button></a>
                                                <a href="{{ url('/cliente/' . $item->id . '/edit') }}"
                                                    title="Edit Cleinte"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Editar</button></a>

                                                <form method="POST" action="{{ url('/cliente' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Deletar cliente" onclick="return confirm("Confirm
                                                        delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        Deletar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
