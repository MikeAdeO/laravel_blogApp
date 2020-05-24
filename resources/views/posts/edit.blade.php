@extends('layouts.app')
  
@section('content')

<link rel="stylesheet" href="{{ ('../../css/app.css')}}">
    <h1>Edit Post</h1>
    @include('inc.messages')
            {!! Form::open(['action' => ['PostController@update', $posts->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{ Form::label('title', 'Title') }}
                     {{ Form::text('title', $posts->title, ['class'=> 'form-control', 'placeholder'=>'title']) }}
                 </div>

                  <div class="form-group">
                    {{ Form::label('body', 'Body') }}
                     {{ Form::textarea('body', $posts->body, ['id'=>'my-editor', 'class'=> 'form-control', 'placeholder'=>'Body Text']) }}
                 </div>
                 <div class="form-group">
                    {{ Form::file('cover_image') }}
                 </div>
                 {{ Form::hidden('_method','PUT') }}
                 {{ Form::submit('Update', ['class'=> 'btn btn-primary']) }}
            {!! Form::close() !!}
@endsection
