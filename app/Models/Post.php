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

    protected $with = ['category', 'author'];
    
    public function scopeFilter($query, array $filters) //Post::newQuery()->filter() C'est ce qu'on appelle une queryScope. Le terme scope est obligatoire avant.
    {
        //$query->where()

        $query->when($filters['search'] ?? false, function ($query, $search) {// '??' au cas ou il y ait un search NULL
            $query
            ->where('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%')
            ->orWhere('excerpt', 'like', '%' . $search . '%');
        });
   

    }

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function author()
    {
        return $this->belongsTo(user::class, 'user_id');
    }


}
