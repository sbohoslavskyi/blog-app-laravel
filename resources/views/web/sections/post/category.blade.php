@extends('web.layout')

@section('title', $category->name)

@section('content')
    <ul>
        @foreach($posts as $post)
            <li>
                <a href="{{ route('post.show', ['post' => $post->slug]) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
