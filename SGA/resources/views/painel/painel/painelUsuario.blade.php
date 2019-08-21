@extends('painel.template.template')
@section('body')

<div id="user">
<div class="row">
<h3>Lista de Usuários <a  href="{{url('/painel/usuarios/create')}}" class="waves-effect waves-light btn right blue darken-1"><i class="material-icons left">add</i>Cadastrar</a></h3>
</div>
<ul class="collapsible">
	@foreach($users as $user)
	<li>
		<div class="collapsible-header">
			<i class="material-icons right" id="collapsible">expand_more</i>
			<i class="material-icons">face</i>
			{{ $user->username}}
		</div>
		<div class="collapsible-body">
			<h5> Nome: {{ $user->nome }}</h5>
			<h5> Email: {{ $user->email}}</h5>
			<div class="row">
			<a href='{{url("/painel/usuario/edit/$user->id")}}'><i class="material-icons right" id="update">create</i></a>
			<a href='{{url("/painel/usuario/delete/$user->id")}}'><i class="material-icons right" id="delete">delete_forever</i></a>
		    </div>
		</div>
	</li>
	@endforeach
</ul>
</div>






@endsection

