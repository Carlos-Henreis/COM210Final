@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Editar dados do(a) atendente: {{$atendente->name}}</h1>
        
        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        
        {!! Form::open(['route'=>['atendente.cruds.update', $atendente->id], 'method' => 'put']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', $atendente->name, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('cpf', 'CPF:') !!}
            {!! Form::text('cpf', $atendente->cpf, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nascimento', 'Data de nascimento:') !!}
            {!! Form::text('nascimento', $atendente->nascimento, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('endereco', 'Endereço:') !!}
            {!! Form::text('endereco', $atendente->endereco, ['class'=>'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('telefone', 'Telefone:') !!}
            {!! Form::text('telefone', $atendente->telefone, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'E-mail:') !!}
            {!! Form::text('email', $atendente->email, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
        </div>
        
        {!! Form::close() !!}
        
    </div>
@endsection