<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;

    protected $table = 'testing_users';
    protected $fillable = ['unix', 'name', 'email', 'phone', 'password'];

    public function postsList(): HasMany
    {
        return $this->hasMany(Post::class, 'author', 'unix');
    }
}
