@extends('painel.template.template')
@section('body')

<div class="row">

  <h2>Painel</h2>

    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <img src="{{url('assets\painel\img\student.svg')}}">
          <span class="black-text card-title">Estudantes</span>
        </div>
        <div class="card-action center">
          <a href="{{url('painel/estudante')}}">Entrar</a>
        </div>
      </div>
    </div>


    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <img src="{{url('assets\painel\img\user.svg')}}">
          <span class="black-text card-title ">Usuários</span>
        </div>
        <div class="card-action center">
          <a href="{{url('painel/usuarios')}}">Entrar</a>
        </div>
      </div>
    </div>


</div>






@endsection