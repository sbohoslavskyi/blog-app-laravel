@extends('web.layout')

@section('title', 'Home')

@section('content')
    @include('web.sections.page.subviews.cover', [
        'title' => $primary_post->title,
        'is_title_as_link' => true,
        'link' => route('post.show', ['post' => $primary_post->slug]),
        'image' => $primary_post->image,
        'caption' => $primary_post->published_at
    ])
    @include('web.sections.post.subviews.grid')
    {{ $posts->links() }}
@endsection
