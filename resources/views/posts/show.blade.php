
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ ('../css/app.css')}}">
    
          <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{ $posts->title }}</h1>
    <img style="width:100%; height: 300px;" src="/storage/cover_images/{{ $posts->cover_image }}">
   <hr>
   <hr>
    <div>
            {{ $posts->body }}

    </div>
    <hr>
     <small>Written on {{ $posts->created_at }} by {{ $posts->user->name }}</small>
     <hr>
     @if(!Auth::guest())
        @if(Auth::user()->id == $posts->user_id)
     <a href="/posts/{{ $posts->id }}/edit" class="btn btn-default">Edit</a>
     {!! Form::open(['action' => ['PostController@destroy', $posts->id], 'method'=> 'POST', 'style' => 'display:inline']) !!}
      
       {{ Form::hidden('_method', 'DELETE') }} 
        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
     {!! Form::close() !!} 
     @endif
     @endif
@endsection

