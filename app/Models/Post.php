<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];
    //protected $fillable = ['title', 'slug', 'category_id', 'excerpt', 'body'];
    // à l'inverse, la propriété $guarded = []; dit que dans le cas d'un 
    // mass assignement, tout est fillable sauf les guarded 
    //(typiquement, ça concernerait l'id, et autres points sensibles)

    //typiquement, on peut laisser $guarded =[]; vide si on est assez certain
    //de son mass assign

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
