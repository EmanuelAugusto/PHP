<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{

	public $rules = ['nome' => 'required|min:3|max:200',
	'datanascimento' => 'required'];

	protected $fillable = ['nome', 'datanascimento'];
	
}
