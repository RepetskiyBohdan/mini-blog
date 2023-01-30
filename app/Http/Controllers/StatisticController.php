<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class StatisticController extends Controller
{


    public function index()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $posts = Post::all();
        return view('statistic', compact('categories', 'tags', 'posts'));
    }
}
