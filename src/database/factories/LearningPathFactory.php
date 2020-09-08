<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LearningPath;
use Faker\Generator as Faker;

$factory->define(LearningPath::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'license_id' => factory(\App\License::class),
        'exam_at' => $faker->dateTime(),
        'recommended_amount' => $faker->word,
    ];
});
