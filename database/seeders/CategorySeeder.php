<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->createCategoryAsArray('Development'));
        DB::table('categories')->insert($this->createCategoryAsArray('Life'));
        DB::table('categories')->insert($this->createCategoryAsArray('Health'));
        DB::table('categories')->insert($this->createCategoryAsArray('Design'));
        DB::table('categories')->insert($this->createCategoryAsArray('Other'));
    }

    private function createCategoryAsArray(string $name): array
    {
        $faker = $this->getFaker();

        return [
            'slug'             => Str::slug($name),
            'name'             => $name,
            'description'      => $faker->sentences(rand(1, 2), true),
            'image'            => $faker->imageUrl(),
            'meta_title'       => $faker->words(rand(4, 6), true),
            'meta_description' => $faker->sentences(rand(1, 2), true)
        ];
    }
}
