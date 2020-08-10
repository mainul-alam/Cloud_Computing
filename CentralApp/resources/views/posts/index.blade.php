@extends('layouts.app')

    @section('content')
      <h1> This is the post page </h1>
      @if(count($posts)>0)
          @foreach($posts as $post)
              <div class="well">
              <h3><a href= "/posts/{{$post->id}}">{{$post->title}}</a></h3>
              <small>Createrd on : {{$post->created_at}}</small>
              </div>  
          @endforeach
          {{$posts->links()}}
      @else 
        <p>No posts yet</p>
      @endif
    @endsection