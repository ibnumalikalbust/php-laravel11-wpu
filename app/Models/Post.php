<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'testing_posts';
    protected $fillable = ['title', 'slug', 'author', 'body'];
}