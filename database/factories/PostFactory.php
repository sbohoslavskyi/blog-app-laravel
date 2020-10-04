<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => ucfirst($this->faker->words(rand(1, 3), true)),
            'short_description' => $this->faker->sentences(rand(1, 2), true),
            'body' => $this->faker->text,
            'image' => $this->faker->imageUrl(),
            'tags' => 'health;earth',
            'reading_duration' => rand(1, 20),
            'is_published' => rand(1, 2) === 1,
            'meta_title'       => $this->faker->words(rand(4, 6), true),
            'meta_description' => $this->faker->sentences(rand(1, 2), true),
            'published_at' => $this->faker->dateTime,
            'category_id' => rand(1, 5)
        ];
    }
}
