@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dados dos Insumos e ações</h1>
    <a href="{{ route('insumo.cruds.create') }}" class="btn btn-default">Cadastrar Insumo</a>
    <br />
    <br />
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Data de Validação</th>
                <th>Data de Entrada</th>
                <th>Data de Solicitação</th>
                <th>Quantidade</th>
                <th>Tipos Disponiveis</th>
                <th>Valor Unitário</th>
            </tr>
        </thead>
        <tbody>
            @foreach($insumo as $insumo)
            <tr>
                <td>{{ $insumo->nome }}</td>
                <td>{{ $insumo->descricao }}</td>
                <td>{{ $insumo->dataValidacao }}</td>
                <td>{{ $insumo->dataEntrada }}</td>
                <td>{{ $insumo->dataSolicitacao }}</td>
                <td>{{ $insumo->quantidade }}</td>
                <td>{{ $insumo->tiposDisponiveis }}</td>
                <td>{{ $insumo->valorUnitario }}</td>
                <td>
                    <a href="{{ route('insumo.cruds.edit',['id'=>$insumo->id]) }}" class="btn-sm btn-success">Editar</a>
                    <a href="{{ route('insumo.cruds.destroy',['id'=>$insumo->id]) }}" class="btn-sm btn-danger">Remover</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection