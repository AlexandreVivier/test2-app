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
Route::get('post', function() {
    $path = __DIR__ . '/../resources/posts/premier-article.html';
    $post =  file_get_contents($path);
    return view('post', [
        'post' => $post
    ]);
});