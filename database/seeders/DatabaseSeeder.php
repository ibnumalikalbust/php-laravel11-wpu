<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AuthorSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\PostSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AuthorSeeder::class,
            CategorySeeder::class,
            PostSeeder::class,
        ]);
    }
}
