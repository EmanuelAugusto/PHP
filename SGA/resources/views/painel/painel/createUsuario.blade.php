@extends('painel.template.template')
@section('body')

<h3>{{ $title ?? 'Cadastro de Usuário' }}</h3>



<div class="row">
	@if(isset($user))
	<form class="col s12" method="POST" action='{{url("/painel/usuario/update/$user->id")}}'>
		{!! method_field('PUT')!!}
	@else
	<form class="col s12" method="POST" action="{{url('/painel/insert/user')}}">
	@endif

    {!! csrf_field() !!}

		<div class="row">
			<div class="input-field col s12">
				<input id="nome" type="text" name="nome" value="{{$user->nome ?? old('nome')}}">
				<label for="nome">Nome</label>
			</div>
			<div class="input-field col s12">
				<input id="NomeUsuario" type="text" name="username" value="{{$user->username ?? old('username')}}">
				<label for="NomeUsuario">Nome de Usuário</label>
			</div>
			<div class="input-field col s12">
				<input id="data" type="email" name="email" value="{{$user->email ?? old('email')}}">
				<label for="email">email</label>
			</div>
			<div class="input-field col s12">
				<input id="senha" type="password" name="password" value="{{old('password')}}">
				<label for="senha">senha</label>
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