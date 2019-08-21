@extends('painel.template.template')
@section('body')
<div class="row">
	<h3 id="body">Lista de Alunos <a  href="{{url('/painel/estudante/create')}}" class="waves-effect waves-light btn right blue darken-1"><i class="material-icons left">add</i>Matricular</a></h3>
</div>
<ul class="collapsible">
	@foreach($aluno as $alunos)
	<li>
		<div class="collapsible-header">
			<i class="material-icons right" id="collapsible">expand_more</i>
			<i class="material-icons">face</i>
			{{ $alunos->nome}} 
		</div>
		<div class="collapsible-body">
			<h5>Id: {{ $alunos->id}}</h5>
			<h5>Nome: {{ $alunos->nome }}</h5>
			<h5>Data de Nascimento: {{ $alunos->datanascimento}}</h5>
			<div class="row">
				<a href='{{url("/painel/estudante/edit/$alunos->id")}}'><i class="material-icons right" id="update">update</i></a>
				<a href='{{url("/painel/estudante/delete/$alunos->id")}}'><i class="material-icons right" id="delete">delete_forever</i></a>
			</div>
		</div>
	</li>
	@endforeach
	
</ul>

@endsection

