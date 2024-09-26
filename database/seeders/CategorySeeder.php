<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'slug' => 'devops-developer',
            'name' => 'Dev Ops Developer',
        ]);
        Category::create([
            'slug' => 'frontend-developer',
            'name' => 'Front End Developer',
        ]);
        Category::create([
            'slug' => 'backend-developer',
            'name' => 'Back End Developer',
        ]);
        Category::create([
            'slug' => 'fullstack-developer',
            'name' => 'Full Stack Developer',
        ]);
        Category::create([
            'slug' => 'uiux-designer',
            'name' => 'UI UX Designer',
        ]);
        Category::create([
            'slug' => 'machine-learning',
            'name' => 'Machine Learning',
        ]);
        Category::create([
            'slug' => 'data-structure',
            'name' => 'Data Structure',
        ]);
        Category::create([
            'slug' => 'web-developer',
            'name' => 'Web Developer',
        ]);
        Category::create([
            'slug' => 'desktop-developer',
            'name' => 'Desktop Developer',
        ]);
        Category::create([
            'slug' => 'mobile-developer',
            'name' => 'Mobile Developer',
        ]);
    }
}
