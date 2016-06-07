@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Produtos</h1>
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Descrição</th>
					</tr>
				</thead>
				<tbody>
					@foreach($teste as $teste)
					<tr>
						<td>{{ $teste->id }}</td>
						<td>{{ $teste->descricao }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
	</div>
@endsection
