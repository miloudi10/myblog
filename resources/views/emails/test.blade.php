@extends('base')
@section('content')

    <div class="d-flex justify-content-around">
        <h1>{{$details['title']}}</h1>
        <p>{{$details['body']}}</p>
    </div>

 @stop