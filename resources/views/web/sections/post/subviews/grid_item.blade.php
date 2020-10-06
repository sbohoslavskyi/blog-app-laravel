<article class="post-card" data-aos="zoom-in">
    <div class="post-card-img" style="background-image: url({{ $post->image }})"></div>
    <div class="post-card-content">
        <a href="{{ route('post.show', ['post' => $post->slug]) }}">
            <h2 class="post-card-title">{{ $post->title }}</h2>
            <p>{{ $post->short_description }}</p>
        </a>
        <footer>
            <a href="{{ route('post.category', ['category' => $post->category->slug]) }}">{{ $post->category->name }}</a>
            <time>{{ $post->published_at }}</time>
        </footer>
    </div>

</article>
