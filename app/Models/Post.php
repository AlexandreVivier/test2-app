<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body'];
    // à l'inverse, la propriété $guarded = []; dit que dans le cas d'un 
    // mass assignement, tout est fillable sauf les guarded 
    //(typiquement, ça concernerait l'id, et autres points sensibles)

    //typiquement, on peut laisser $guarded =[]; vide si on est assez certain
    //de son mass assign
}
