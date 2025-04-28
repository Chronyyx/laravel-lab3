<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        \App\Models\Author::factory(5)->create()->each(function ($author) {
            $author->posts()->saveMany(
                \App\Models\Post::factory(3)->make()
            );
        });
    }

}
