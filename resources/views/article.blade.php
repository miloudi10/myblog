@extends('base')

@section('content')
<h1 class="text-center mt-3 mb-5 card-header">Article</h1>
<div class="row mx-auto">
    
  
  <div class="card text-center" >
    <div class="card-body">
      <h4 class="card-title mb-4">{{$article->title}}</h4>
      <a href="{{route('articles')}}"  class="btn btn-primary mb-3">Retour</a>
      <h6 class="card-subtitle mb-2 text-muted">{{$article->subtitle}}</h6>
      <p class=" text-center mt-3 ml-5 mr-5">{{$article->content}}.</p>
      
    </div>
  </div>
  </div>
  
    


    
@stop