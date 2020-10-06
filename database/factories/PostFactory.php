<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title = 'How Web Hosting Can Impact Page Load Speed_' . rand(1, 999);

        return [
            'slug'              => Str::slug($title),
            'title'             => $title,
            'short_description' => $this->faker->realText(500),
            'body'              => $this->faker->realText(5000),
            'image'             => $this->faker->imageUrl(1920, 1080),
            'tags'              => 'health;earth',
            'reading_duration'  => rand(1, 20),
            'is_published'      => rand(1, 2) === 1,
            'meta_description'  => $this->faker->realText(400),
            'meta_keywords'     => $this->faker->words(rand(5, 10), true),
            'published_at'      => $this->faker->dateTime,
            'category_id'       => rand(1, 5)
        ];
    }
}
