@extends('painel.template.template')
@section('body')

<h3 id="body">{{ $title ??  'Cadastro de aluno' }}</h3>



<div class="row">

	@if(isset($aluno))
	<form class="col s12" method="POST" action='{{url("/painel/estudante/update/$aluno->id")}}'>
		{!! method_field('PUT') !!}
		@else 
		<form class="col s12" method="POST" action="{{url('/painel/insert')}}">
			@endif
			{!! csrf_field() !!}
			<div class="row">
				<div class="input-field col s12">
					<input id="nome" type="text" name="nome" value="{{ $aluno->nome ?? old('nome')}}">
					<label for="nome">Nome</label>
				</div>
				<div class="input-field col s12">

					<input id="nome" type="date" name="datanascimento" value="{{ $aluno->datanascimento ?? old('datanascimento') }}">
					<label for="Data">Data de Nascimento</label>
				</div>
			</div>

			<button class="btn waves-effect waves-light blue darken-1" type="submit" name="action">Submit
				<i class="material-icons right">send</i>
			</button>
		</form>
	</div>

	@if (isset($errors) && count($errors) > 0)
	<div class="card-panel">
		@foreach($errors->all() as $error)
		<span class="red-text text-red"><p>{{ $error}}</p><br></span>
		@endforeach
	</div>
	@endif




	@endsection