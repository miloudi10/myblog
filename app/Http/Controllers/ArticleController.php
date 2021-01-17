<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;





class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(8);
        
        return view('articles.index',[
            'articles' => $articles
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        // step 1: validate the request data
        $request->validate($this->validationRoutes());

        // step 2: store data in DB
        $article = new Article;
        $article->title = $request->title;
        $article->subtitle = $request->subtitle;
        $article->content = $request->content;
        $article->id = $request->id;
       
        $article->save();

        // step 3: redirection
  
        return redirect()->route('articles.index')->with('success', "l'article a ete bien ajouté .");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('articles.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $validatedData = $request->validate(
            $this->validationRoutes());
    
            Article::whereId($id)->update($validatedData);
        return redirect()->route('articles.index')->with('success', "l'article a ete bien modifié .");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        // dd($article);
        $article->delete();

        return redirect()->route('articles.index')->with('success', "l'article a été  bien supprimé" );
    }

    private function validationRoutes(){
        return[
            'title' => 'required|min:6|max:150',
            'subtitle' => 'required|min:6|max:250',
            'content' => 'required '
        ];
    }
   
}
