@extends('web.layout')

@section('title', 'Home')

@section('content')
    <div class="post-cover" style="background-image: url(http://lorempixel.com/1920/1080/);">
        <div class="container h-100">
            <div class="post-cover-content">
                <time>{{ $primary_post->published_at }}</time>
                <a href="{{ route('post.show', ['post' => $primary_post->slug]) }}">
                    <h1>{{ $primary_post->title }}</h1>
                </a>
                <a href="{{ route('post.show', ['post' => $primary_post->slug]) }}">Read more</a>
            </div>
        </div>
    </div>
    @include('web.sections.post.subviews.grid')
    {{ $posts->links() }}
@endsection
