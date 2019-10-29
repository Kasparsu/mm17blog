<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'path' => 'https://picsum.photos/id/' . $faker->numberBetween(0,1084) . '/1068/300?blur&grayscale',
        'name' => $faker->sentence,
    ];
});

