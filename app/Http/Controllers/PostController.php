<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{

    // Function d'index / Search :

    public function index() 
    {
        return view('posts', [
            'posts' => Post::latest()->filter(request(['search', 'category']))->get(), // en array pour Post::$filter ensuite
            'categories' => Category::all(),
            'currentCategory' => Category::firstWhere('slug', request('category')) //Show first category where the slug matches up
    
        ]);
    }

    // Function pour afficher un post :
    public function show(Post $post)
    {
        return view('post', [ 
            'post' => $post
        ]);
    }

}
