@extends('web.layout')

@section('title', $post->title)

@section('meta')
    <meta name="description" content="{{ $post->meta_description }}">
    <meta name="keywords" content="{{ $post->meta_keywords }}">
@endsection

@section('content')
    <div class="post" style="background: url(https://lorempixel.com/1920/1080) no-repeat center center fixed;">
        <div class="header container">
            <h1>{{ $post->title }}</h1>
        </div>
        <p class="container body">
            Laborum qui voluptates non labore est quidem. Et non ut quo aut. Voluptatem ratione optio esse deleniti ut.
            Laborum qui voluptates non labore est quidem. Et non ut quo aut. Voluptatem ratione optio esse deleniti ut.
            Laborum qui voluptates non labore est quidem. Et non ut quo aut. Voluptatem ratione optio esse deleniti ut.
            Laborum qui voluptates non labore est quidem. Et non ut quo aut. Voluptatem ratione optio esse deleniti ut.
            Laborum qui voluptates non labore est quidem. Et non ut quo aut. Voluptatem ratione optio esse deleniti ut.
            Laborum qui voluptates non labore est quidem. Et non ut quo aut. Voluptatem ratione optio esse deleniti ut.
            Laborum qui voluptates non labore est quidem. Et non ut quo aut. Voluptatem ratione optio esse deleniti ut.
            Laborum qui voluptates non labore est quidem. Et non ut quo aut. Voluptatem ratione optio esse deleniti ut.
            Laborum qui voluptates non labore est quidem. Et non ut quo aut. Voluptatem ratione optio esse deleniti ut.
            Laborum qui voluptates non labore est quidem. Et non ut quo aut. Voluptatem ratione optio esse deleniti ut.
            Laborum qui voluptates non labore est quidem. Et non ut quo aut. Voluptatem ratione optio esse deleniti ut.
            Laborum qui voluptates non labore est quidem. Et non ut quo aut. Voluptatem ratione optio esse deleniti ut.
            Laborum qui voluptates non labore est quidem. Et non ut quo aut. Voluptatem ratione optio esse deleniti ut.
            Laborum qui voluptates non labore est quidem. Et non ut quo aut. Voluptatem ratione optio esse deleniti ut.
            Laborum qui voluptates non labore est quidem. Et non ut quo aut. Voluptatem ratione optio esse deleniti ut.
            Laborum qui voluptates non labore est quidem. Et non ut quo aut. Voluptatem ratione optio esse deleniti ut.
        </p>
    </div>
@endsection
