

@extends('layouts.app');

@section('content')
	 <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Nova Produção</div>
            <div class="panel-body">

		  <form class="form-horizontal" role="form" method="POST" action="{{ url('/producao/cruds/store') }}">
                        {{ csrf_field() }}

		 		<div class="form-group{{ $errors->has('cpfprod') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Associado (CPF)</label>

                    <div class="col-md-2">
                        
                        <select class="form-control" name="cpfprod" value="{{ old('cpfprod') }}">                        
                            <option disabled selected value>Selecione</option>
                            @foreach ($associado as $associado)
                                <option>{{ $associado->cpf }}</option>                               
                            @endforeach
                        </select>
                        
                        @if ($errors->has('cpfprod'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cpfprod') }}</strong>
                            </span>
                        @endif

                    </div>
                </div>

		 		<div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Tipo</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tipo" value="{{ old('tipo') }}">

                                @if ($errors->has('tipo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

				<div class="form-group{{ $errors->has('previsao') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Data de Previsão</label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="previsao" value="{{ old('previsao') }}">

                                @if ($errors->has('previsao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('previsao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

		 		<div class="form-group{{ $errors->has('insumos') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Insumos necessários</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="insumos" value="{{ old('insumos') }}">

                                @if ($errors->has('insumos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('insumos') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <div class="form-group{{ $errors->has('observacoes') ? ' has-error' : '' }}">
  						    <label class="col-md-4 control-label">Observações</label>
                            <div class="col-md-6">
  							    {!! Form::textarea('observacoes',  null, ['class'=>'form-control']) !!}
				            </div>
                        </div>

		 		<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Criar Produção
                                </button>
                            </div>
                        </div>

            </form>

		 	</div>
		 </div>
	</div>
@endsection