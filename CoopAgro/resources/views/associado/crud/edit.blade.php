@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Editar dados do(a) associado: {{$associado->name}}</h1>
        
        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        
        {!! Form::open(['route'=>['associado.crud.update', $associado->id], 'method' => 'put']) !!}
        
            <div class="form-group">
                {!! Form::label('name', 'Nome:') !!}
                {!! Form::text('name', $associado->name, ['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('cpf', 'CPF ou CNPJ:') !!}
                {!! Form::text('cpf', $associado->cpf, ['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('rg', 'RG:') !!}
                {!! Form::text('rg', $associado->rg, ['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('nascimento', 'Data de nascimento:') !!}
                {!! Form::text('nascimento', $associado->nascimento, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('endereco', 'Endereço:') !!}
                {!! Form::text('endereco', $associado->endereco, ['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('telefone', 'Telefone:') !!}
                {!! Form::text('telefone', $associado->telefone, ['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('email', 'E-mail:') !!}
                {!! Form::text('email', $associado->email, ['class'=>'form-control']) !!}
            </div>
            

            <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                <label class="col-md-4 control-label">Tipo</label>

                <div class="col-md-2">
                    <select class="form-control" name="tipo" value="{{old('tipo') }}">
                        <option></option>
                        <option>Agricultura</option>
                        <option>Pecuaria</option>
                        <option>Mista</option>
                    </select>                
                    @if ($errors->has('tipo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tipo') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            
            <div class="form-group">
                {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
            </div>
        
        {!! Form::close() !!}
        
    </div>
@endsection