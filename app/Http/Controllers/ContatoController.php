<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function store(){

      //Tenta calidar, caso retorne erro
         // redireciona para a página anterior.
         $this->validate(request(),[
            'name' => 'required',
            'email' => 'required',
            'body'  => 'required'
        ]);

        $contato = new Contato;
        $contato->name = request('name');
        $contato->email = request('email');
        $contato->body = request('body');

  

        $contato->save();
        return redirect('/');

    }

    public function index(){
        return view('index');

    }


    public function admin(){
        $contatos = Contato::all();
        return view('admin', compact('contatos')) ;
    }
}
