@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <ul>
        @foreach($categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach
    </ul>
@endsection
