<?php

namespace Database\Seeders;

use Faker\Factory;
use Faker\Generator;
use Faker\Provider\Base;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class BaseSeeder extends Seeder
{
    protected Factory $faker;

    public function getFaker(): Generator
    {
        $faker = Factory::create();
        $faker->addProvider(new Base($faker));
        $faker->addProvider(new Lorem($faker));

        return $faker;
    }
}
