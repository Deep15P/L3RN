@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    <p>{{ WikiRand::getLink() }}</p> 

    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <iframe src="http://www.youtube.com/embed/{{$post->videoId}}"
   width="560" height="315" frameborder="0" allowfullscreen></iframe>
                <h3>{{$post->title}}</h3>
                <p>{{$post->description}}</p>
            </div>
        @endforeach
    @else
        <p> You currently don't have any saved content</p>
    @endif


@endsection
