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
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category']))->get(), // en array pour Post::$filter ensuite    
        ]);
    }

    // Function pour afficher un post :
    public function show(Post $post)
    {
        return view('posts.show', [ 
            'post' => $post
        ]);
    }

}
// nommer ses fonctions selon le sujet.l'action : fn index('posts.index')