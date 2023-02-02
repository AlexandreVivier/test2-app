<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route de Landing Page avec les collections Laravel :
Route::get('/', function () {

    // tout est déjà dans post::all():
    //$posts = Post::all();

    return view('posts', [
        'posts' => Post::latest()->get(),
        'categories' => Category::all()
        // Dans post.php, on a mis $with.
        // On peut donc virer Post::latest()->with('category', 'author')->get()
    ]);
});




// Route avec le filesystem, code simplifié :
Route::get('posts/{post:slug}', function (Post $post) {// Post::where('slug', $post)->firstOrFail();
   
    // On assainit le code en passant par la classe Post pour y mettre les méthodes de caching
    // Soit la méthode find par le $slug de la classe Post devient la variable $post.
// (penser à l'importer en haut du doc via USE)

  //  $post = Post::findOrFail($id);
// Route model binding. Plus besoin de cette ligne
    return view('post', [ 
        'post' => $post
    ]);
});




// Afficher les catégories :

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts,
        // Dans post.php, on a mis $with.
        // On peut donc virer $category->posts->load(['category', 'author']),
        'currentCategory'=> $category,
        'categories'=>Category::all(),
    ]);
} );

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts,
        // Dans post.php, on a mis $with.
        // On peut donc virer $author->posts->load(['category', 'author']),
        'categories'=>Category::all(),
    ]);
} );