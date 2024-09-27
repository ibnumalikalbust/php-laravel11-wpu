<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    
    protected $table = 'testing_posts';
    protected $fillable = ['title', 'slug', 'author', 'category', 'body'];
    protected $with = ['authorDetail', 'categoryDetail'];

    public function authorDetail(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'author', 'slug');
    }

    public function categoryDetail(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category', 'slug');
    }

    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when($filters['keyword'] ?? false, fn ($query, $keyword) => $query->where('title', 'like', '%' . $keyword . '%'));
        $query->when($filters['author'] ?? false, fn ($query, $author) => $query->whereHas('authorDetail', fn ($query) => $query->where('slug', $author)));
        $query->when($filters['category'] ?? false, fn ($query, $category) => $query->whereHas('categoryDetail', fn ($query) => $query->where('slug', $category)));
    }
}
