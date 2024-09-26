<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    public function definition(): array
    {
        $name = fake()->word() . ' ' . fake()->word();
        $slug = Str::slug($name);
        return [
            'slug' => $slug,
            'name' => $name,
        ];
    }
}
