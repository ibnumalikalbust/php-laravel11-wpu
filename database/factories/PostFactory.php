<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition(): array
    {
        $author = Author::inRandomOrder()->first();
        $category = Category::inRandomOrder()->first();
        $title = fake()->sentence();
        $slug = Str::slug($title);
        $author = $author['slug'];
        $category = $category['slug'];
        $body = '';
        for ($i = 0; $i < 5; $i++) {
            $body .= fake()->paragraph(10) . PHP_EOL . PHP_EOL;
        }
        return [
            'slug' => $slug,
            'title' => $title,
            'author' => $author,
            'category' => $category,
            'body' => $body,
        ];
    }
}
