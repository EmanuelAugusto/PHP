<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\User;


class UserController extends Controller
{

	private $user;

	public function __construct(User $user){
		$this->user = $user;
	}

	public function insertUser(Request $request){

		$dataForm = $request->except('_token', 'action');

		$messages = [

			'nome.required' => 'O campo nome é de preechimento obrigatório',
			'username.required' => 'O campo Nome de usuário é preechimento obrigatório',
			'email.required' => 'O campo e-mail é preechimento obrigatório',
			'password.required' => 'O campo senha é preechimento obrigatório'
		];

		$validate = validator($dataForm, $this->user->rules, $messages);
		if( $validate->fails()){
			return redirect('painel/usuarios/create')->withErrors($validate)->withInput();
		}



		$userIn = new User;
		$userIn->nome = $request->nome;
		$userIn->username = $request->username;
		$userIn->email = $request->email;
		$userIn->password = bcrypt($request->password);
		$userIn->save();

		if ($userIn)
			return redirect('/painel/usuarios/');
		else
			return redirect('painel/usuarios/create');

	}

	public function edit($id){

		$user = $this->user->find($id);

		$title = 'Edição de Usuário';

		return view('painel.painel.createUsuario', compact('user', 'title'));
	}

	public function update(Request $request, $id){

		$dataForm = $request->except('_token', 'action');

		$messages = [

			'nome.required' => 'O campo nome é de preechimento obrigatório',
			'username.required' => 'O campo nome de usuário é preechimento obrigatório',
			'email.required' => 'O campo email é de preechimento obrigatório',
			'password.required' => 'O campo senha é de preechimento obrigatório',
			'password.min' => 'O campo senha precisa de no mínimo 4 caracteres',
			'password.max' => 'O campo senha é de no máximo 15 caracteres',
			'nome.min' => 'Precisa ter mais de 3 caracteres',
			'nome.max' => 'Precisa ter no máximo 200 caracteres'

		];

		$validate = validator($dataForm, $this->user->rules, $messages);
		if( $validate->fails()){
			return redirect("/painel/usuario/edit/$id")->withErrors($validate)->withInput();
		}

		$userIn = $this->user->find($id);
		$userIn->nome  = $request->nome;
		$userIn->username = $request->username;
		$userIn->email = $request->email;
		$userIn->password = bcrypt($request->password);
		$up = $userIn->save();

		if ($up)
			return redirect('/painel/usuarios');
		else
			return redirect("/painel/usuario/edit/$id");
	}

	public function delete(Request $request, $id){
		$delete = $this->user->find($id)->delete();

		if ($delete)
			return redirect('/painel/usuarios');
		else
			return redirect('/painel/usuarios');
	}


}
