@extends('base')

@section('content')
<h1 class="text-center mt-3 mb-5 card-header">Articles</h1>
<div class="row">
    
    @foreach($articles as $article)
    <div class="col-md-6">
      <div class="card ">
        <div class="card-body">
           
          <h5 class="card-title card-header bg-transparent ">{{$article->title}}</h5>
          <p class="card-title">{{$article->subtitle}}</p>
          <a href="{{ route('article', $article->id) }}" class="btn btn-primary">lire la suite</a>

          
        </div>
        
      </div>
    </div>
    @endforeach
  </div>
  <div class="d-flex justify-content-around mt-5">
      {{$articles->links()}}
  </div>
   
    {{-- <style>
        .w-5{display:none}
        
    </style>
        --}}
    


    
@stop