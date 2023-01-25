@extends('layouts.app')

@section('content')

    <div class="container d-flex flex-column align-items-center">

      <h1 class="mb-4">I tuoi post:</h1>

    @foreach ($posts as $post)
      
    <div class="card mb-4" style="width: 28rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Open Post</a>
      </div>
    </div>

    @endforeach

    <div>{{$posts->links()}}</div>

    </div>


@endsection