<?php

namespace Database\Factories;

use App\Models\AnsweredTasks;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AnsweredTasksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AnsweredTasks::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
            'task_id' => \App\Models\Task::inRandomOrder()->first()->id,
            'answered_at' => $this->faker->dateTimeBetween('-15 days'),
            'answered_correctly' => $this->faker->boolean(),
        ];
    }
}
