<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function index(): View
    {
        $primaryPost = Post::where('is_primary', true)
            ->first();
        $posts = Post::where('is_primary', false)
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return view('web.sections.page.index', [
            'primary_post' => $primaryPost,
            'posts' => $posts
        ]);
    }
}
