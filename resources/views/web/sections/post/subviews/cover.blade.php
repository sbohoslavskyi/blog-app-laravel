<div class="post-cover" style="background-image: url({{ $post->image }});">
    <div class="container h-100">
        <div class="post-cover-content" data-aos="zoom-in-up">
            <time>{{ $post->published_at }}</time>
            <a href="{{ route('post.show', ['post' => $post->slug]) }}">
                <h1>{{ $post->title }}</h1>
            </a>
            @if ($has_link)
                <a href="{{ route('post.show', ['post' => $post->slug]) }}">Read more</a>
            @endif
        </div>
    </div>
</div>
