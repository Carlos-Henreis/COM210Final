@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Editar dados da Produção: {{$requisicao_equipamento->id}}</h1>
        
        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        
       {!! Form::open(['route'=>['requisicao_equipamento.cruds.update', $requisicao_equipamento->id], 'method' => 'put']) !!}
        <div class="form-group">
            {!! Form::label('local', 'Local:') !!}
            {!! Form::text('local', $requisicao_equipamento->local, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('datainicio', 'Data de inicio:') !!}
            {!! Form::text('datainicio', $requisicao_equipamento->datainicio, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('horainicio', 'Hora de inicio de uso:') !!}
            {!! Form::text('horainicio', $requisicao_equipamento->horainicio, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tempo', 'Tempo de uso:') !!}
            {!! Form::text('tempo', $requisicao_equipamento->tempo, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('datafim', 'Data final:') !!}
            {!! Form::text('datafim', $requisicao_equipamento->datafim, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('valor', 'Valor:') !!}
            {!! Form::text('valor', $requisicao_equipamento->valor, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar Alterações', ['class'=>'btn btn-primary']) !!}
        </div>
        
        {!! Form::close() !!}
        
    </div>
@endsection