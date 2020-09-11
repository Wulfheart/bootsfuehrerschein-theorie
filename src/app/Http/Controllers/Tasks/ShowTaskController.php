<?php

namespace App\Http\Controllers\Tasks;

use App\Http\Controllers\Controller;
use App\Models\License;
use App\Models\Task;
use Illuminate\Http\Request;

class ShowTaskController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(License $license)
    {
        // dd($license);
        return view('welcome');
    }

    private function getTask(License $license) : Task{
        $id = auth()->user()->id;
        $first = \App\Models\Task::query()
            ->selectRaw('tasks.id AS task_id , count(answered_tasks.answered_correctly) AS answered_correctly_count')
            ->where('license_id', '=', $license->id)
            ->leftJoin('answered_tasks', function ($join) use ($id) {
                $join->on('answered_tasks.task_id', '=', 'tasks.id')
                    ->where('user_id', $id)
                    ->where('answered_correctly', 1);
            })
            ->groupBy('tasks.id');
        $second = \App\Models\Task::query()
            ->selectRaw('tasks.*, count(answered_tasks.task_id) AS total_answered_count, answered_correctly_count')
            ->where('license_id', '=', $license->id)
            ->leftJoin('answered_tasks', function ($join) use ($id) {
                $join->on('answered_tasks.task_id', '=', 'tasks.id')
                    ->where('user_id', $id);
            })
            ->joinSub($first, 'correct_count', function ($join) {
                $join->on('tasks.id', '=', 'correct_count.task_id');
            })
            ->groupBy('tasks.id')
            ->with('responses')
            ->inRandomOrder()
            ->orderBy('answered_correctly_count')
            ->orderBy('total_answered_count')
            ->first();
        return $second;
    }
}
