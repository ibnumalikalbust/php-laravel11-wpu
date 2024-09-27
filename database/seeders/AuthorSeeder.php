<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Author::create([
        //     'slug' => 'ibnumalikalbust',
        //     'name' => 'Habibullah',
        //     'email' => 'ibnumalikalbustomi@gmail.com',
        //     'phone' => '6285222228090',
        //     'password' => 'Bismillah-Barokah-Amin-Ya-Allah',
        // ]);
        // Author::create([
        //     'slug' => 'fahrurhappy',
        //     'name' => 'Fahrur Rozy',
        //     'email' => 'fahrurfazida@gmail.com',
        //     'phone' => '628884088452',
        //     'password' => 'Krembun-Tak-Endek-Rogi-1000-Kanah',
        // ]);
        Author::factory(10)->create([]);
    }
}
