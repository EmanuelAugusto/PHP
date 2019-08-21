<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index(){
    	return view('home.sga.index');
    }

    public function login(Request $request){
    	$request->validate([
    		'email' => 'required|email',
    		'password' => 'required'
    	]);

    	$credentials = ['email' => $request->email, 'password' => $request->password ];

        $remember = (!empty($request->remember)) ? $request->remember : false;

    	if (Auth::attempt($credentials, $remember)){
    		return redirect()->intended('painel');
    	}else{
    		return redirect()->back()->with('msg', 'Acesso Negado');
    	}
    }

    public function painel(){
        $title = 'Painel | SGA';
    	return view('painel.painel.painel', compact('title'));
    }
}
