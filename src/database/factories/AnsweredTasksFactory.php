<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AnsweredTasks;
use Faker\Generator as Faker;

$factory->define(AnsweredTasks::class, function (Faker $faker) {
    return [
        'task_id' => factory(\App\Task::class),
        'learning_path_id' => factory(\App\LearningPath::class),
        'answered_at' => $faker->dateTime(),
    ];
});
