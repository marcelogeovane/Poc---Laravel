<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Predio;
class PostController extends Controller
{

    public function index(){

        $predio = new Predio;
        $posts =  $predio->posts;


        return view('posts.index', compact('posts'));
    }

    public function show(){
        return view('posts.show');
}

    public function create(){
        return view('posts.create');
    }

    public function store(){


        //Tenta calidar, caso retorne erro
         // redireciona para a página anterior.
         $this->validate(request(),[
            'name' => 'required',
            'message'  => 'required'
        ]);
       
        //Cria um novo post
        $post = new Post;
        $post->name = request('name');
        $post->body = request('message');
        $post->predio_id = session('id');
        // Salva o post no BD.
        $post->save();
        // Redireciona para o index.
        return redirect('/');

          
        /*
        // Cria e salva um novo post.
        Post::create([
            'name' => request('name'),
            'body'  => request('message')
        ]);

        // Redireciona para o index.
        return redirect('/');*/
    }

    public function rodarte(){

        $predio = Predio::find(1);
        $posts = $predio->posts;

        session(['id' => 1]);

        return view('predios.rodarte', compact('posts'));
    }

    public function matriz(){

        $predio = Predio::find(2);
        $posts = $predio->posts;
    
            session(['id' => 2]);
    
            return view('predios.matriz', compact('posts'));
    }

    public function vicentinos(){

        $predio = Predio::find(3);
        $posts = $predio->posts;
        
                session(['id' => 3]);
        
                return view('predios.vicentinos', compact('posts'));
    }

    public function antonio(){

        $predio = Predio::find(4);
        $posts = $predio->posts;
            
                    session(['id' => 4]);
            
                    return view('predios.antoniovieira', compact('posts'));
    }

    public function engenheiro(){

        $predio = Predio::find(5);
        $posts = $predio->posts;
        
                session(['id' => 5]);
        
                return view('predios.engenheiro', compact('posts'));
    }

    public function emart(){

        $predio = Predio::find(6);
        $posts = $predio->posts;
        
                session(['id' => 6]);
        
                return view('predios.emart', compact('posts'));
    }

    public function estacao(){

        $predio = Predio::find(7);
        $posts = $predio->posts;
        
                session(['id' => 7]);
        
                return view('predios.estacao', compact('posts'));
    }

    public function matadouro(){

        $predio = Predio::find(8);
        $posts = $predio->posts;
        
                session(['id' => 8]);
        
                return view('predios.matadouro', compact('posts'));
    }


                

}
