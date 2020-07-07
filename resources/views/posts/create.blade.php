@extends('layout.app')

@section('content')
<div class="container">
<h1>Post Create</h1>
{!! Form::open(['action' => 'PostsController@store','method'=>'POST']) !!}
    <div>
        {{Form::label('text', 'Title')}}
        {{Form::text('text')}}
    </div>
    <div>
        {{Form::label('body', 'Body')}}
        {{Form::text('body')}}
    </div>
    <div>
        {{Form::submit('Post story',['class'=>"btn btn-purple"])}}
    </div>
{!! Form::close() !!}
</div>
@endsection