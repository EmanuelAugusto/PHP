<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $rules = ['nome' => 'required|min:3|max:200',
	                 'username' => 'required',
	                 'email' => 'required',
	                 'password' => 'required|min:4|max:15'];

    protected $fillable = ['nome', 'username', 'email', 'password'];
}
