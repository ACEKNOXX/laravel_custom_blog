@extends('layout.app')

@section('content')
<div class="container">
<h1>Post Index</h1>
    @if(count($posts)>0 && !empty($posts))
        @foreach($posts as $post)
        <ul class="collection with-header">
            <li class="collection-header">
                <a href=""><h5>{{$post->title}}</h5></a>
                <p>{{$post->body}}</p>
            </li>
        </ul>
      @endforeach
                   
    @endif
</div>
@endsection