@extends('layouts.app');

@section('content')
	 <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Inserção de Equipamento</div>
            <div class="panel-body">

		  <form class="form-horizontal" role="form" method="POST" action="{{ url('/equipamento/cruds/store') }}">
                        {{ csrf_field() }}

                <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">Tipo</label>

                    <div class="col-md-2">
                        <select class="form-control" name="tipo" value="{{old('tipo') }}">
                            <option>Veículo</option>
                            <option>Máquina</option>
                            <option>Equipamento</option>
                        </select>                
                        @if ($errors->has('tipo'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tipo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                </div>

                <div class="form-group{{ $errors->has('idmaquina') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">ID da maquina</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="idmaquina" value="{{ old('idmaquina') }}">

                                @if ($errors->has('idmaquina'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idmaquina') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Associado</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="descricao" value="{{ old('descricao') }}">

                                @if ($errors->has('descricao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('descricao') }}</strong>
                                    </span>
                                @endif
                            </div>
                   
                        </div>

                <div class="form-group{{ $errors->has('dataaquisicao') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">ID da maquina</label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="dataaquisicao" value="{{ old('dataaquisicao') }}">

                                @if ($errors->has('dataaquisicao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dataaquisicao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

				<div class="form-group{{ $errors->has('datafabricacao') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">CPF do associado</label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="datafabricacao" value="{{ old('datafabricacao') }}">

                                @if ($errors->has('datafabricacao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('datafabricacao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

		 		<div class="form-group{{ $errors->has('procedencia') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Local de uso</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="procedencia" value="{{ old('procedencia') }}">

                                @if ($errors->has('procedencia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('procedencia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <div class="form-group{{ $errors->has('valor') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Data de inicio</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="valor" value="{{ old('valor') }}">

                                @if ($errors->has('valor'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('valor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

		 		<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Inserir equipamento
                                </button>
                            </div>
                        </div>

            </form>

		 	</div>
		 </div>
	</div>
@endsection