<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function index(): View
    {
        return view('web.sections.page.index', [
            'categories' => Category::all()
        ]);
    }
}
