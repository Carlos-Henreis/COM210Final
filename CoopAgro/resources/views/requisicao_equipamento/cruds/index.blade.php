@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dados das requisições de equipamento</h1>
    <a href="{{ route('requisicao_equipamento.cruds.create') }}" class="btn btn-default">Cadastrar Requisição de Equipamento</a>
    <br />
    <br />
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Tipo de serviço</th>
                <th>Associado</th>
                <th>Local de uso</th>
                <th>Data inicial de uso</th>
                <th>Horário inicial de uso</th>
                <th>Tempo de uso</th>
                <th>Data final de uso</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($requisicao_equipamento as $requisicao_equipamento)
            <tr>
                <td>{{ $requisicao_equipamento->tipo }}</td>
                <td>{{ $requisicao_equipamento->associado }}</td>
                <td>{{ $requisicao_equipamento->local }}</td>
                <td>{{ $requisicao_equipamento->datainicio }}</td>
                <td>{{ $requisicao_equipamento->horainicio }}</td>
                <td>{{ $requisicao_equipamento->tempo }}</td>
                <td>{{ $requisicao_equipamento->datafim }}</td>
                <td>{{ $requisicao_equipamento->valor }}</td>
                <td>
                    <a href="{{ route('requisicao_equipamento.cruds.edit',['id'=>$requisicao_equipamento->id]) }}" class="btn-sm btn-success">Editar</a>
                    <a href="{{ route('requisicao_equipamento.cruds.destroy',['id'=>$requisicao_equipamento->id]) }}" class="btn-sm btn-danger">Remover</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection