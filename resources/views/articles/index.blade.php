@extends('base')
@section('content')
<div class="container">
  @if($message =Session::get('success'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close"  data-dismiss="alert" aria-hidden="close">x</button>
      <strong>{{$message}}</strong>
    </div>
    @endif
    <h1 class="text-center my-5">Articles</h1>
    <div class="d-flex justify-content-center">
      <a href="{{route('articles.create')}}" class="btn btn-info btn-lg mt-1 mb-3"><i class="fas fa-plus mr-2"></i>Ajouter un article</a>
    </div>
    <table class="table table-hover">
        <thead>
          <tr class="table-active">
            <th scope="col">ID</th>
            <th scope="col">Titre</th>
            <th scope="col">Creé le</th>
            <th scope="col">Action

            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($articles as $article)
          <tr >
            <th>{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article-> dateformat()}}</td>
            <td class="d-flex">
                <a href="{{route('articles.edit',$article->id)}}"class="btn btn-warning mr-3">Editer</a>
                <form action="{{route('articles.destroy',$article->id)}}" method="POST">
                  @csrf
                  @method("DELETE")
                  <button type="submit" class="btn btn-danger">Supprimer</button>
                
                </form>
               
                  
                 
                
               
            </td>
          
          </tr> 
          @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-around mt-5">
        {{$articles->links()}}
    </div>
</div>

@stop