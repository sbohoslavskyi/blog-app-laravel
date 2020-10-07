@extends('web.layout')

@section('title', $post->title)

@section('meta')
    <meta name="description" content="{{ $post->meta_description }}">
    <meta name="keywords" content="{{ $post->meta_keywords }}">
@endsection

@section('content')
    @include('web.sections.page.subviews.cover', [
        'title' => $post->title,
        'is_title_as_link' => false,
        'image' => $post->image,
        'caption' => $post->published_at
    ])
    <div class="container">
        <p class="post-content">{{ $post->body }}</p>
    </div>
@endsection
