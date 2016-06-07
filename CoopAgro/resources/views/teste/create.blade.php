@extends ('layouts.app')

@section('content')
	<div class="container">
		<h1>novo teste</h1>

 		
		 {!! Form::open(['route'=>'teste.store']) !!}


		 <!-- Descricao Form Input -->

		<div class="form-group">
 			{!! Form::label('descricao', 'Descrição:') !!}
 			{!! Form::textarea('descricao',  null, ['class'=>'form-control']) !!}
 		</div>

 		<div class="form-group">
	 		{!! Form::submit('Criar teste', ['class'=>'btn btn-primary']) !!}
 		</div>

 		{!! Form::close() !!}

	</div>
@endsection