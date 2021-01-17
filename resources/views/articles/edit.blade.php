@extends('base')
@section('content')

<div class="container">
    <h1 class="text-center mt-4 mb-4">Editer cet article</h1>
    <div class="mb-3">
        
          <form method="post" action="{{ route('articles.update', $article->id)}}" >
            @csrf
            @method('PUT')
            <label >Titre</label>
            <input type="text"  class="form-control " name="title" placeholder="title"/>
            @error('title')
            <span class=" invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-3">
            <label >Subtitle</label>
            <input type="text" value="{{$article->subtitle}}" class="form-control " name="subtitle" placeholder="subtitle"/>
            @error('subtitle')
            <span class=" invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-3">
            <label >Contenu Article</label>
            <textarea class="form-control  "  name="content" w-100>
              {{$article->content}}"
            </textarea>
            @error('content')
            <span class=" invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
           
          </div>
          <button type="submit" class="btn btn-info btn-lg btn-block">Poster l'article</button>
        </form>
       
        
</div>

@stop