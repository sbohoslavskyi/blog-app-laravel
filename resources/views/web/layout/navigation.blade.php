<nav class="navigation">
    @foreach($categories as $category)
        <a class="navigation-item" href="{{ route('post.category', ['category' => $category]) }}">
            {{ $category->name }}
        </a>
    @endforeach
</nav>
