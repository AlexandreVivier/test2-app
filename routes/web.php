<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
obsolete :
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;*/

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

//Homepage :

Route::get('/', [PostController::class, 'index'] )->name('home');

//Afficher le post *wildcard :

Route::get('posts/{post:slug}', [PostController::class, 'show']);



// Afficher les catégories :
//Est désormais transféré dans le PostController::index()


// Afficher les posts selon auteurs :
/*
Route::get('authors/{author:username}', function (User $author) {
    return view('posts.index', [
        'posts' => $author->posts,
    ]);
} );

OBSOLETE ^^ */