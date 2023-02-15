<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $with = ['category', 'author'];

    public function author()
    {
        return $this->belongsTo(user::class, 'user_id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}


