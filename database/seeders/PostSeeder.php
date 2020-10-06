<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()
            ->times(20)
            ->create();

        $faker = $this->getFaker();
        DB::table('posts')->insert([
            'slug'              => Str::slug('How Web Hosting Can Impact Page Load Speed'),
            'title'             => 'How Web Hosting Can Impact Page Load Speed',
            'short_description' => $faker->realText(500),
            'body'              => $faker->realText(5000),
            'image'             => $faker->imageUrl(1920, 1080),
            'tags'              => 'health;earth',
            'reading_duration'  => rand(1, 20),
            'is_published'      => rand(1, 2) === 1,
            'is_primary'        => true,
            'meta_description'  => $faker->realText(400),
            'meta_keywords'     => $faker->words(rand(5, 10), true),
            'published_at'      => $faker->dateTime,
            'category_id'       => rand(1, 5)
        ]);
    }
}
