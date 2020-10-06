<div class="container mt-5 mb-5">
    <div class="row mb-4">
        <div class="col-12">
            @include('web.sections.post.subviews.grid_item', ['post' => $posts[0]])
        </div>
    </div>

    @if (count($posts) >= 2)
        <div class="row mb-4">
            <div class="col-8">
                @include('web.sections.post.subviews.grid_item', ['post' => $posts[1]])
            </div>
            <div class="col-4">
                @include('web.sections.post.subviews.grid_item', ['post' => $posts[2]])
            </div>
        </div>
    @endif

    @if (count($posts) >= 5)
        <div class="row mb-4">
            <div class="col-4">
                @include('web.sections.post.subviews.grid_item', ['post' => $posts[3]])
            </div>
            <div class="col-4">
                @include('web.sections.post.subviews.grid_item', ['post' => $posts[4]])
            </div>
            <div class="col-4">
                @include('web.sections.post.subviews.grid_item', ['post' => $posts[5]])
            </div>
        </div>
    @endif

    @if (count($posts) >= 7)
        <div class="row mb-4">
            <div class="col-6">
                @include('web.sections.post.subviews.grid_item', ['post' => $posts[6]])
            </div>
            <div class="col-6">
                @include('web.sections.post.subviews.grid_item', ['post' => $posts[7]])
            </div>
        </div>
    @endif

    @if (count($posts) === 10)
        <div class="row">
            <div class="col-4">
                @include('web.sections.post.subviews.grid_item', ['post' => $posts[8]])
            </div>
            <div class="col-8">
                @include('web.sections.post.subviews.grid_item', ['post' => $posts[9]])
            </div>
        </div>
    @endif
</div>
