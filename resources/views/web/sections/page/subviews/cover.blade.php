<div class="page-cover" style="background-image: url({{ $image }});">
    <div class="container h-100">
        <div class="page-cover-content" data-aos="zoom-in-up">
            @isset($caption)
                <span class="page-cover-caption">{{ $caption }}</span>
            @endisset

            @if($is_title_as_link)
                <a href="{{ $link }}">
                    <h1 class="page-cover-title">{{ $title }}</h1>
                </a>
            @else
                <h1 class="page-cover-title">{{ $title }}</h1>
            @endif

            @isset($link)
                <a href="{{ $link }}">Read more</a>
            @endisset
        </div>
    </div>
</div>
