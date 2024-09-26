<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    
    protected $table = 'testing_posts';
    protected $fillable = ['title', 'slug', 'author', 'body'];

    public function authorDetail(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author', 'unix');
    }
}
