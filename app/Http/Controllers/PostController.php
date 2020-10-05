<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    public function show(Post $post): View
    {
        return view('web.sections.post.show', ['post' => $post]);
    }

    public function category(Category $category): View
    {
        $posts = Post::where('category_id', $category->id)
            ->orderBy('published_at', 'desc')
            ->get();

        return view('web.sections.post.category', [
            'category' => $category,
            'posts' => $posts
        ]);
    }
}
