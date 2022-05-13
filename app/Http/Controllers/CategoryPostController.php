<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use TCG\Voyager\Models\Category;

class CategoryPostController extends Controller
{
    public function index(Category $category){
        return Inertia::render('Posts/Index', [
            'posts' => $category->posts()->with('category')->paginate(10),
        ]);
    }
}
