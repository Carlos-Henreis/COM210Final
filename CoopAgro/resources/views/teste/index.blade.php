@extends('layouts.app')

@section('content')
	<div class="container">
 		<h1>Testes</h1>

 		<a href="{{ route('teste.create') }}" class="btn btn-default">Novo teste</a>
 		<br />
 		<br />
 		<table class="table table-striped table-bordered table-hover">
	 		<thead>
	 		<tr>
	 			<th>ID</th>
	 			<th>Descrição</th>
	 			<th>Ação</th>
	 		</tr>
	 		</thead>
	 		<tbody>

	 		@foreach($teste as $teste)
	 		<tr>
				 <td>{{ $teste->id }}</td>
				 <td>{{ $teste->descricao }}</td>
				 <td>
				 <a href="{{ route('teste.edit',['id'=>$teste->id]) }}" class="btn-sm btn-success">Editar</a>
				 <a href="{{ route('teste.destroy',['id'=>$teste->id]) }}" class="btn-sm btn-danger">Remover</a>
				 </td>
	 		</tr>
	 		@endforeach

	 		</tbody>
 		</table>
 	</div>
 @endsection
