@extends('layouts.app');

@section('content')
	 <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Nova Requisição de Equipamento</div>
            <div class="panel-body">

		  <form class="form-horizontal" role="form" method="POST" action="{{ url('/requisicao_equipamento/cruds/store') }}">
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

                <div class="form-group{{ $errors->has('servico') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Serviço</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="servico" value="{{ old('servico') }}">

                                @if ($errors->has('servico'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('servico') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

				<div class="form-group{{ $errors->has('associado') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Associado</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="associado" value="{{ old('associado') }}">

                                @if ($errors->has('associado'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('associado') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

		 		<div class="form-group{{ $errors->has('local') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Local de uso</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="local" value="{{ old('local') }}">

                                @if ($errors->has('local'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('local') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <div class="form-group{{ $errors->has('datainicio') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Data de inicio</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="datainicio" value="{{ old('datainicio') }}">

                                @if ($errors->has('datainicio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('datainicio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <div class="form-group{{ $errors->has('horainicio') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Hora de inicio de uso</label>
                            <div class="col-md-6">
                                <input type="time" class="form-control" name="horainicio" value="{{ old('horainicio') }}">

                                @if ($errors->has('horainicio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('horainicio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <div class="form-group{{ $errors->has('tempo') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Tempo de uso</label>
                            <div class="col-md-6">
                                <input type="time" class="form-control" name="tempo" value="{{ old('tempo') }}">

                                @if ($errors->has('tempo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tempo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <div class="form-group{{ $errors->has('datafim') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Data de final</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="datafim" value="{{ old('datafim') }}">

                                @if ($errors->has('datafim'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('datafim') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                <div class="form-group{{ $errors->has('valor') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Valor</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control" name="valor" value="{{ old('valor') }}">

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
                                    <i class="fa fa-btn fa-user"></i>Criar Requisição
                                </button>
                            </div>
                        </div>

            </form>

		 	</div>
		 </div>
	</div>
@endsection