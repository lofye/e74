@extends('app')

@section('content')

    <h1>{{ $post->title }}</h1>
    <h5>Published {{ $post->published_at->diffForHumans() }} by {{ $post->user->name }}</h5>
    <hr>
    {!! nl2br(e($post->content)) !!}
    <hr>

@endsection