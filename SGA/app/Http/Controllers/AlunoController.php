<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Aluno;


class AlunoController extends Controller
{
   private $aluno;

   public function __construct(Aluno $aluno){
    $this->aluno = $aluno;
}

public function insert(Request $request){
    $dataForm = $request->except('_token', 'action');

    

    $messages = [

        'nome.required' => 'O campo nome é de preechimento obrigatório',
        'datanascimento.required' => 'O campo data de nascimento é preechimento obrigatório'


    ];

    $validate = validator($dataForm, $this->aluno->rules, $messages);
    if( $validate->fails()){
        return redirect('painel/estudante/create')->withErrors($validate)->withInput();
    }



    $insert = $this->aluno->insert($dataForm);

    if ($insert)
        return redirect('/painel/estudante/');
    else
        return redirect('painel/estudante/create');

}

public function edit($id){
 $aluno = $this->aluno->find($id);

 $title = 'Edição de aluno';

 return  view('painel.painel.createEstudante', compact('aluno', 'title'));
}

public function update(Request $request, $id){

    $dataForm = $request->all();

    $messages = [

        'nome.required' => 'O campo nome é de preechimento obrigatório',
        'datanascimento.required' => 'O campo data de nascimento é preechimento obrigatório',
        'nome.min' => 'Precisa ter mais de 3 caracteres',
        'nome.max' => 'Precisa ter mais de 3 caracteres'

    ];

    $validate = validator($dataForm, $this->aluno->rules, $messages);
    if( $validate->fails()){
        return redirect("painel/estudante/edit/$id")->withErrors($validate)->withInput();
    }


    $aluno = $this->aluno->find($id);
    $update = $aluno->update($dataForm);

    if ($update)
        return redirect('/painel/estudante/');
    else
        return redirect("/painel/estudante/edit/$id");
}




public function delete(Request $request, $id){

    $delete = $this->aluno->find($id)->delete();

    if ($delete)
        return redirect('/painel/estudante');
    else
        return redirect('/painel/estudante');
}
}
