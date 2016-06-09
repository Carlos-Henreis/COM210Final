@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dados dos Associados e ações</h1>
    <a href="{{ route('associado.crud.create') }}" class="btn btn-default">Cadastrar Associado</a> 
    <br />
    <br />
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF ou CNPJ</th>
                <th>Tipo</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($associado as $associado)
            <tr>
                <td>{{ $associado->id }}</td>
                <td>{{ $associado->name }}</td>
                <td>{{ $associado->cpf }}</td>
                <td>{{ $associado->tipo }}</td>
                <td>
                    
                    <a href="{{ route('associado.crud.edit',['id'=>$associado->id]) }}" class="btn-sm btn-success">Editar</a>
                    <a href="{{ route('associado.crud.destroy',['id'=>$associado->id]) }}" class="btn-sm btn-danger">Remover</a>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection