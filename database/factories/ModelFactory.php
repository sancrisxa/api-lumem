<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
use Illuminate\Support\Str;

$factory->define(App\Models\Event::class, function (Faker\Generator $faker) {
    return [
        'event' => Str::random(5),
        'added_on' => $faker->date,
    ];
});
