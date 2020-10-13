@extends('admin.layout')

@section('title', 'Posts')

@section('content')
    <ul class="list-group">
        @foreach($posts as $post)
            <li class="list-group-item">
                {{ $post->title }}
            </li>
        @endforeach
    </ul>
@endsection
