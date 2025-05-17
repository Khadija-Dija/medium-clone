<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //
        User::factory()->create([
            'name' => 'Jon Doe',
            'email' => 'john@gmail.com',
        ]);
        $categories = [
            'Technology',
            'Health',
            'Science',
            'Sport',
            'Politics',
            'Entertainment',
        ];
        foreach ($categories as $categorie) {
            Category::create(['name' => $categorie]);
        }
        Post::factory(100)->create();
    }
}
