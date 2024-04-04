<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory(11)->create();
        User::factory(1)->create();
        $this->call([
            ServiceCategorySeeder::class,
            ServiceProviderSeeder::class,
        ]);
    }
}