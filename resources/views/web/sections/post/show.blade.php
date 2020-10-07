@extends('web.layout')

@section('title', $post->title)

@section('meta')
    <meta name="description" content="{{ $post->meta_description }}">
    <meta name="keywords" content="{{ $post->meta_keywords }}">
@endsection

@section('content')
    @include('web.sections.post.subviews.cover', ['post' => $post, 'has_link' => false])
    <div class="container">
        <p class="post-content">{{ $post->body }}</p>
    </div>
@endsection
