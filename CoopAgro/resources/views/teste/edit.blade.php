@extends('layouts.app')

 @section('content')
	<div class="container">
		 <h1>Editar teste: {{$teste->id}}</h1>

		 @if ($errors->any())
	 		<ul class="alert alert-warning">
	 			@foreach($errors->all() as $error)
	 				<li>{{ $error }}</li>
	 			@endforeach
	 		</ul>
		 @endif

		{!! Form::open(['route'=>['teste.update', $teste->id], 'method'=>'put']) !!}


		<!-- Descricao Form Input -->

	 	<div class="form-group">
			 {!! Form::label('descricao', 'Descricao:') !!}
			 {!! Form::textarea('descricao', $teste->descricao, ['class'=>'form-cont\rol']) !!}
	 	</div>

	 	<div class="form-group">
	 		{!! Form::submit('Salvar teste', ['class'=>'btn btn-primary']) !!}
	 	</div>

		 {!! Form::close() !!}

	 </div>
 @endsection