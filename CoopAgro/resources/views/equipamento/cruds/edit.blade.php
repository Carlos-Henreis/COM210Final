@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Editar dados do equipamento: {{$equipamento->id}}</h1>
        
        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        
       {!! Form::open(['route'=>['equipamento.cruds.update', $equipamento->id], 'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('valor', 'Valor:') !!}
            {!! Form::text('valor', $equipamento->valor, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar Alterações', ['class'=>'btn btn-primary']) !!}
        </div>
        
        {!! Form::close() !!}
        
    </div>
@endsection