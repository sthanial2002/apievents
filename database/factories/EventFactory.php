<?php

use Faker\Generator as Faker;

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

$factory->define(App\Event::class, function (Faker $faker) {


    $filePath = storage_path('images');

    if (!File::exists($filePath)) {
        File::makeDirectory($filePath);
    }

    return [
        'urlToImage' => $faker->image($filePath,400,200),
        'title' => $faker->sentence,
        'description' => $faker->paragraph
    ];
});
