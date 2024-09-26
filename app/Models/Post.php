<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    
    protected $table = 'testing_posts';
    protected $fillable = ['title', 'slug', 'author', 'category', 'body'];

    public function authorDetail(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author', 'unix');
    }

    public function categoryDetail(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category', 'slug');
    }
}
