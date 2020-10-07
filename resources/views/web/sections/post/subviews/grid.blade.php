<div class="container mt-5 mb-5">
    <div class="row mb-4">
        <div class="col-12">
            @include('web.sections.post.subviews.grid_item', ['post' => $posts[0]])
        </div>
    </div>

    @if (count($posts) >= 2)
        <div class="row mb-4">
            @isset($posts[1])
                <div class="col-8">
                    @include('web.sections.post.subviews.grid_item', ['post' => $posts[1]])
                </div>
            @endisset
            @isset($posts[2])
                <div class="col-4">
                    @include('web.sections.post.subviews.grid_item', ['post' => $posts[2]])
                </div>
            @endisset
        </div>
    @endif

    @if (count($posts) >= 5)
        <div class="row mb-4">
            @isset($posts[3])
                <div class="col-4">
                    @include('web.sections.post.subviews.grid_item', ['post' => $posts[3]])
                </div>
            @endisset
            @isset($posts[4])
                <div class="col-4">
                    @include('web.sections.post.subviews.grid_item', ['post' => $posts[4]])
                </div>
            @endisset
            @isset($posts[5])
                <div class="col-4">
                    @include('web.sections.post.subviews.grid_item', ['post' => $posts[5]])
                </div>
            @endisset
        </div>
    @endif

    @if (count($posts) >= 7)
        <div class="row mb-4">
            @isset($posts[6])
                <div class="col-6">
                    @include('web.sections.post.subviews.grid_item', ['post' => $posts[6]])
                </div>
            @endisset
            @isset($posts[7])
                <div class="col-6">
                    @include('web.sections.post.subviews.grid_item', ['post' => $posts[7]])
                </div>
            @endisset
        </div>
    @endif

    @if (count($posts) === 10)
        <div class="row">
            @isset($posts[8])
                <div class="col-4">
                    @include('web.sections.post.subviews.grid_item', ['post' => $posts[8]])
                </div>
            @endisset
            @isset($posts[9])
                <div class="col-8">
                    @include('web.sections.post.subviews.grid_item', ['post' => $posts[9]])
                </div>
            @endisset
        </div>
    @endif
</div>
