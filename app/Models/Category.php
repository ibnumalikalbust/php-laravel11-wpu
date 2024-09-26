<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    
    protected $table = 'testing_category';
    protected $fillable = ['title', 'slug'];

    public function postsList(): HasMany
    {
        return $this->hasMany(Post::class, 'category', 'slug');
    }
}
