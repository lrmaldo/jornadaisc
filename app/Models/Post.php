<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //pertence a la tabla posts
    protected $table = 'posts';
    /* columnas de posts */
    protected $fillable = ['title', 'content', 'user_id'];
    /* relacion con la tabla users */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
