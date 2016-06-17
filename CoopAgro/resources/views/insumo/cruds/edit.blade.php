@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Editar dados do Insumo: {{$insumo->nome}}</h1>
        
        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        
       <!-- {!! Form::open(['route'=>['insumo.cruds.update', $insumo->id], 'method' => 'put']) !!} -->  
       {!! Form::open(['route'=>['insumo.cruds.update', $insumo->id], 'method' => 'put']) !!}
        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $insumo->nome, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('valorUnitario', 'Valor Unitário:') !!}
            {!! Form::text('valorUnitario', $insumo->valorUnitario, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('descricao', 'Descrição:') !!}
            {!! Form::textarea('descricao', $insumo->descricao, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar Alterações', ['class'=>'btn btn-primary']) !!}
        </div>
        
        {!! Form::close() !!}
        
    </div>
@endsection