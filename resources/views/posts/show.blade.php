@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-secondary">Go back</a>
    <h1>{{$post->title}}</h1>
    <hr>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="perfect">
   <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>   
   <hr>     
  
        <div>
            {!!$post->body!!}    
        </div>   
     <hr>
     @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
          <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>

        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!} 
         @endif       
     @endif
    @endsection