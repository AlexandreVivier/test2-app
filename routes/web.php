<?php

use Illuminate\Support\Facades\Route;

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

//Route de landing page :
Route::get('/', function () {
    return view('posts');
});


// Route pour accéder à un article sans slug :
/*
Route::get('post', function() {
    $path = __DIR__ . '/../resources/posts/premier-article.html';
    $post =  file_get_contents($path);
    return view('post', [
        'post' => $post
    ]);
});
*/

// Route pour accéder à un article avec Slug et Regex + Caching :
Route::get('posts/{post}', function($slug) {

    $path = __DIR__ . "/../resources/posts/{$slug}.html";

    if (! file_exists($path)) {
            return redirect('/');
    }

     // la variable $post passée dans le blade devient une Mise en cache:
    $post = cache()->remember("posts.{$slug}", now()->addMinutes(20), fn () => file_get_contents($path));

    /*
        Cela équivaut à  :
    $post = cache()->remember("posts.{$slug}", 1200, function () use ($path) {
        return file_get_contents($path);
    });
    */

    return view('post', [
        'post' => $post
    ]);

})->where('post', '[A-z_\-]+');



// Route pour accéder à un article avec Slug et Regex :
/*
Route::get('posts/{post}', function($slug) {
    // On passe le slug en {wildcard} dans l'URI, et en paramètre dans la fonction.

    //Puis, on variabilise le $path qu'on emploie en slug :
    $path = __DIR__ . "/../resources/posts/{$slug}.html";

    //Avant toute chose, un premier contrôle sur ce $path :
    if (! file_exists($path)) {
            // otpion : abort(404);
            return redirect('/');
    }
    // On fait la variable $post à passer dans le fichier post.blade.php. 
    //Cette variable contient le contenu du doc qui sera implémenté dans le blade.
    $post =  file_get_contents($path);

    return view('post', [
        // On peut ainsi récupérer la variable $post dans ce tableau assoc :
        'post' => $post
    ]);
    //puis la regex :
})->where('post', '[a-Z_\-]+');
// on peut simplifier avec des prédef comme whereAlpha, pour de l'alphabetique, ou whereAlphaNumeric etc....
*/

