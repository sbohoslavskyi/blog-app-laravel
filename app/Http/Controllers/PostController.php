<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    public function show(Post $post): View
    {
        return view('web.sections.post.show', ['post' => $post]);
    }
}
