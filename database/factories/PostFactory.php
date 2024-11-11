<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'author_id' => User::factory(),  // Links each post to a new user by default
            'date' => $this->faker->date,
            'content' => $this->faker->paragraph,
            'link' => $this->faker->url,
        ];
    }
}
