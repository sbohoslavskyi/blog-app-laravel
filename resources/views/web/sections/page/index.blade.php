@extends('web.layout')

@section('title', 'Home')

@section('content')
    <ul>
        @foreach($categories as $category)
            <li>
                <p>{{ $category->name }}</p>
                <ul>
                    @foreach($category->posts as $post)
                        <li>
                            <a href="{{ route('post.show', ['post' => $post->slug]) }}">{{ $post->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection
