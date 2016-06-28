@extends('layouts.app')

@section('content')
<div class="container">
 <h1>Relatórios de Produção</h1>
<table class="table table-striped table-bordered table-hover">

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/producao/relatorio/relatorioqual') }}">
                                {{ csrf_field() }}
                <h2></h2>
                <div class="form-group{{ $errors->has('tiposDisponiveis') ? ' has-error' : '' }}">
                    <div class="col-md-6">
                        <select class="form-control" name="tiposDisponiveis" value="{{old('tiposDisponiveis') }}">
                            <option>Geral</option>
                            <option>Associado</option>
                            <option>Tipo</option>
                        </select>                   
                   </div> 
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-user"></i>Gerar relatórios
                        </button>
                    </div>
                </div>

             </form>
        </td>
    <br/>
</div>
@endsection