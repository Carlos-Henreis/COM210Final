@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dados dos Atendentes e ações</h1>
    <a href="{{ route('atendente.cruds.create') }}" class="btn btn-default">Cadastrar Atendente</a>
    <br />
    <br />
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($atendente as $atendente)
            <tr>
                <td>{{ $atendente->id }}</td>
                <td>{{ $atendente->name }}</td>
                <td>{{ $atendente->cpf }}</td>
                <td>
                    <a href="{{ route('atendente.cruds.edit',['id'=>$atendente->id]) }}" class="btn-sm btn-success">Editar</a>
                    <a href="{{ route('atendente.cruds.destroy',['id'=>$atendente->id]) }}" class="btn-sm btn-danger">Remover</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection