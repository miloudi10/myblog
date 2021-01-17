<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function index() {

        $articles = Article::paginate(6);
        
        return view('articles',[
            'articles' => $articles
        ]);
    }

    public function show( $id) {
        //or show(article $article) avec la supprime de la liigne corespondant a $article .....
        $article = Article::where('id', $id)->firstOrFail();
     
        return view('article',[
            'article' => $article
        ]);
    }
}
