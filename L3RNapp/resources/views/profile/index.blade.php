@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    @if(count($posts) > 1)
        @foreach($posts as $post)
            <div class="well">
                <h3>{{$post->resultKind}}</h3>
            </div>
        @endforeach
    @else
        <p> You currently don't have any saved content</p>
    @endif
@endsection
