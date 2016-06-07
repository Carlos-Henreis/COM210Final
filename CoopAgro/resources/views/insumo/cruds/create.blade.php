

@extends('layouts.app');

@section('content')
	 <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Novo Insumo</div>
            <div class="panel-body">

		  <form class="form-horizontal" role="form" method="POST" action="{{ url('/insumo/cruds/store') }}">
                        {{ csrf_field() }}

		 		<div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nome" value="{{ old('nome') }}">

                                @if ($errors->has('nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

				<div class="form-group{{ $errors->has('dataSolicitacao') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Data de Solicitação</label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="dataSolicitacao" value="{{ old('dataSolicitacao') }}">

                                @if ($errors->has('dataSolicitacao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nascimento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

		 		<div class="form-group{{ $errors->has('dataEntrada') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Data de Entrada</label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="dataEntrada" value="{{ old('dataEntrada') }}">

                                @if ($errors->has('dataEntrada'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dataEntrada') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


		 		<div class="form-group{{ $errors->has('dataValidacao') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Data de Validação</label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="dataValidacao" value="{{ old('dataValidacao') }}">

                                @if ($errors->has('dataValidacao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dataValidacao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <div class="form-group{{ $errors->has('tiposDisponiveis') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Tipos Disponiveis</label>
		 				     <div class="col-md-6">
    		 		 			<select class="form-control" name="tiposDisponiveis" value="{{old('tiposDisponiveis') }}">
        						<option></option>
       							<option>Sementes</option>
       							<option>Defensivos Agricolas</option>
        						<option>Adubos</option>
      						</select>	 			 	
    		 		       </div> 
                </div>

		 		<div class="form-group{{ $errors->has('valorUnitario') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Valor Unitário</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="valorUnitario" value="{{ old('valorUnitario') }}">

                                @if ($errors->has('valorUnitario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('valorUnitario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

		 		<div class="form-group{{ $errors->has('quantidade') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Quantidade</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="quantidade" value="{{ old('quantidade') }}">

                                @if ($errors->has('quantidade'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantidade') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
  						    <label class="col-md-4 control-label">Descrição</label>
                            <div class="col-md-6">
  							    {!! Form::textarea('descricao',  null, ['class'=>'form-control']) !!}
				            </div>
                        </div>

		 		<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Criar Insumo
                                </button>
                            </div>
                        </div>

            </form>

		 	</div>
		 </div>
	</div>
@endsection