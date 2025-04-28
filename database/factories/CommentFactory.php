<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition()
    {
        return [
            'post_id' => Post::factory(),
            'commenter_name' => $this->faker->name(),
            'comment' => $this->faker->sentence(),
        ];
    }
}
