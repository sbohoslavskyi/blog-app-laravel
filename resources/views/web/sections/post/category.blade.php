@extends('web.layout')

@section('title', $category->name)

@section('content')
    @include('web.sections.page.subviews.cover', [
        'title' => $category->name,
        'is_title_as_link' => false,
        'image' => $category->image,
        'caption' => 'category'
    ])
    @include('web.sections.post.subviews.grid', ['posts' => $posts])
    {{ $posts->links() }}
@endsection
