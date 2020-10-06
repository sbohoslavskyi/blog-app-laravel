@extends('web.layout')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    {{ $posts[0]->title }}
                </div>
            </div>
        </div>

        @if (count($posts) >= 2)
            <div class="row">
                <div class="col-8">
                    <div class="card card-body">
                        {{ $posts[1]->title }}
                    </div>
                </div>
                <div class="col-4">
                    <div class="card card-body">
                        {{ $posts[2]->title }}
                    </div>
                </div>
            </div>
        @endif

        @if (count($posts) >= 5)
            <div class="row">
                <div class="col-4">
                    <div class="card card-body">
                        {{ $posts[3]->title }}
                    </div>
                </div>
                <div class="col-4">
                    <div class="card card-body">
                        {{ $posts[4]->title }}
                    </div>
                </div>
                <div class="col-4">
                    <div class="card card-body">
                        {{ $posts[5]->title }}
                    </div>
                </div>
            </div>
        @endif

        @if (count($posts) >= 7)
            <div class="row">
                <div class="col-6">
                    <div class="card card-body">
                        {{ $posts[6]->title }}
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-body">
                        {{ $posts[7]->title }}
                    </div>
                </div>
            </div>
        @endif

        @if (count($posts) === 10)
            <div class="row">
                <div class="col-4">
                    <div class="card card-body">
                        {{ $posts[8]->title }}
                    </div>
                </div>
                <div class="col-8">
                    <div class="card card-body">
                        {{ $posts[9]->title }}
                    </div>
                </div>
            </div>
        @endif
    </div>
    {{ $posts->links() }}
@endsection
