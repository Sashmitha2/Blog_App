<?php

namespace Database\Factories;

use App\Models\User;      // <--- Add this
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->sentence(),
            'content'=>$this->faker->paragraph(3,true),// generates random content with 3paragraphs
            'author_id'=>User::factory(),// associate witha random user
            'category_id'=>Category::factory(),// associate witha random category

        ];
    }
}
