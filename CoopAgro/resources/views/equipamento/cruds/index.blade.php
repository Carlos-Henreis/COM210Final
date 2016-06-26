@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dados dos equipamentos</h1>
    <a href="{{ route('equipamento.cruds.create') }}" class="btn btn-default">Cadastrar Equipamento</a>
    <br />
    <br />
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Tipo de equipamento</th>
                <th>ID da maquina</th>
                <th>Descrição</th>
                <th>Data de aquisição</th>
                <th>Data de fabricação</th>
                <th>Procedencia</th>
                <th>Valor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($equipamento as $equipamento)
            <tr>
                <td>{{ $equipamento->tipo }}</td>
                <td>{{ $equipamento->idmaquina }}</td>
                <td>{{ $equipamento->descricao }}</td>
                <td>{{ $equipamento->dataaquisicao }}</td>
                <td>{{ $equipamento->datafabricacao }}</td>
                <td>{{ $equipamento->procedencia }}</td>
                <td>{{ $equipamento->valor }}</td>
                <td>
                    <a href="{{ route('equipamento.cruds.edit',['id'=>$equipamento->id]) }}" class="btn-sm btn-success">Editar</a>
                    <a href="{{ route('equipamento.cruds.destroy',['id'=>$equipamento->id]) }}" class="btn-sm btn-danger">Remover</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
@endsection