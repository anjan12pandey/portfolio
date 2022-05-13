<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class PostController extends Controller
{
    public function index(){
        return Inertia::render('Posts/Index', [
            'posts' => Post::with('category')->paginate(10),
        ]);
    }

    public function show(Post $Post){
        return Inertia::render('Posts/Show', [
            'post' => [
                'post' => $Post,
                'relatedPost' => Post::where('category_id', $Post->category_id)->take(10)->get(),
            ],

            'categories' => Category::get(['id', 'name', 'slug']),
        ]);
    }


}
