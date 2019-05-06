@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <h3>{{$post->title}}</h3>
                <p>{{$post->description}}
            </div>
        @endforeach
    @else
        <p> You currently don't have any saved content</p>
    @endif
@endsection
