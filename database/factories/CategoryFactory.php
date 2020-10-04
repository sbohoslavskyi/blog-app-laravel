<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'             => ucfirst($this->faker->words(rand(1, 3), true)),
            'description'      => $this->faker->sentences(rand(1, 2), true),
            'image'            => $this->faker->imageUrl(),
            'meta_title'       => $this->faker->words(rand(4, 6), true),
            'meta_description' => $this->faker->sentences(rand(1, 2), true)
        ];
    }
}
