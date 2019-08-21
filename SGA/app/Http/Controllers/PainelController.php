<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Aluno;
use App\Models\Painel\User;




class PainelController extends Controller
{

    public function estudante(Aluno $aluno){
        $title = 'Painel de Alunos';
    	$aluno = $aluno->all();
    	return view('painel.painel.painelEstudante', compact('aluno', 'title'));
    }

    public function usuarios(User $user){
        $title = 'Painel de Usuários';
    	$users = $user->all();
    	return view('painel.painel.painelUsuario', compact('users', 'title'));

    }

    public function createStudant(){
        $title = 'Cadastrar Aluno';
    	return view('painel.painel.createEstudante', compact('title'));

    }

    public function createUser(){
        $title = 'Cadastrar Usuário';
    	return view('painel.painel.createUsuario', compact('title'));

    }
}
