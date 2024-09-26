<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();
        $slug = Str::slug($title);
        $author = fake()->name();
        $body = '';
        for ($i = 0; $i < 5; $i++) {
            $body .= fake()->paragraph(10) . PHP_EOL . PHP_EOL;
        }
        return [
            'title' => $title,
            'slug' => $slug,
            'author' => $author,
            'body' => $body,
        ];
    }
}
