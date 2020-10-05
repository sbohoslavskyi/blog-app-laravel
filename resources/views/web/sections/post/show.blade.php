@extends('web.layout')

@section('title', $post->title)

@section('content')
    <p>{{ $post->body }}</p>
@endsection
