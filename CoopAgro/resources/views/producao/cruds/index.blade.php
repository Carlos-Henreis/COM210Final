@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dados das produções e ações</h1>
    <a href="{{ route('producao.cruds.create') }}" class="btn btn-default">Cadastrar Produção</a>
    <br />
    <br />
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Tipo de produção</th>
                <th>Previsão da produção</th>
                <th>Insumos necessários</th>
                <th>Observações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($producao as $producao)
            <tr>
                <td>{{ $producao->tipo }}</td>
                <td>{{ $producao->previsao }}</td>
                <td>{{ $producao->insumos }}</td>
                <td>{{ $producao->observacoes }}</td>
                <td>
                    <a href="{{ route('producao.cruds.edit',['id'=>$producao->id]) }}" class="btn-sm btn-success">Editar</a>
                    <a href="{{ route('producao.cruds.destroy',['id'=>$producao->id]) }}" class="btn-sm btn-danger">Remover</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection