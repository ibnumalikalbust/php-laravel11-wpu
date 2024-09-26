<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

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
