<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Films;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Models\Films::class, function (Faker $faker) {
    $data= [
        'name' =>  $faker->text(rand (5, 10)),
        'films_owner_id' => rand (1,3),
        'genre_id' => rand(1, 11),
        'raiting' => rand(1, 101),
        'director' => $faker->name(), 
        'plot' => $faker->text(rand (10, 40)),
        'year' => rand(1930, 2020),
    ];
    return $data;
});
