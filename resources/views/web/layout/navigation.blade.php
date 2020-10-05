@foreach($categories as $category)
    <li>
        <a href="{{ route('post.category', ['category' => $category]) }}">{{ $category->name }}</a>
    </li>
@endforeach
