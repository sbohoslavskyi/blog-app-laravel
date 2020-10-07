@extends('web.layout')

@section('title', 'Home')

@section('content')
    @include('web.sections.post.subviews.cover', ['post' => $primary_post, 'has_link' => true])
    @include('web.sections.post.subviews.grid')
    {{ $posts->links() }}
@endsection
