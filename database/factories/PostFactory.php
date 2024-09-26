<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $category = Category::inRandomOrder()->first();
        $title = fake()->sentence();
        $slug = Str::slug($title);
        $author = $user['unix'];
        $category = $category['slug'];
        $body = '';
        for ($i = 0; $i < 5; $i++) {
            $body .= fake()->paragraph(10) . PHP_EOL . PHP_EOL;
        }
        return [
            'title' => $title,
            'slug' => $slug,
            'author' => $author,
            'category' => $category,
            'body' => $body,
        ];
    }
}
