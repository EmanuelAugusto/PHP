@extends('home.template.template')

@section('body')

<div class="row" id="login">
	<h3 class="center">Login</h3>
	<div class="container">
		@if(session('msg'))
		<h3 class="center">{{ session('msg') }}</h3>
		@endif

		<div class="center">
			@if( $errors->any() )
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</div>
		@endif
		<form class="col s12" method="POST" action="/login">
			{{csrf_field()}}
			<div class="input-field col m12 s12">
				<input id="email" type="email" class="validate" name="email">
				<label for="email">Email</label>
			</div>
			<div class="input-field col m12 s12">
				<input id="password" type="password" name="password">
				<label for="password">Senha</label>
			</div>
			<div class="row">
			<p class="right">
				<label>
					<input type="checkbox" value="1" name="remember" />
					<span>lembrar usuário</span>
				</label>
			</p>
		</div>
			
			<button class="btn waves-effect waves-light right blue darken-1" type="submit" name="action">Submit
				<i class="material-icons right">send</i>
			</button>

		</form>
	</div>
</div>
</div>



@endsection