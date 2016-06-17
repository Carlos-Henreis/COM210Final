@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Editar dados da Produção: {{$producao->id}}</h1>
        
        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        
       {!! Form::open(['route'=>['producao.cruds.update', $producao->id], 'method' => 'put']) !!}
        <div class="form-group">
            {!! Form::label('tipo', 'Tipo:') !!}
            {!! Form::text('tipo', $producao->tipo, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('previsao', 'Previsão da produção:') !!}
            {!! Form::text('previsao', $producao->previsao, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('insumos', 'Insumos necessários:') !!}
            {!! Form::text('insumos', $producao->insumos, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('observacoes', 'Observações:') !!}
            {!! Form::text('observacoes', $producao->descricao, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar Alterações', ['class'=>'btn btn-primary']) !!}
        </div>
        
        {!! Form::close() !!}
        
    </div>
@endsection