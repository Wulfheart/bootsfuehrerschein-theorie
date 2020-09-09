<?php

namespace App\Http\Livewire;

use App\Models\License;
use App\Models\Task;
use Livewire\Component;

class Question extends Component
{
    public License $license;
    public Task $task;
    public bool $showSolution = false;
    public $selected;

    public function mount()
    {
        $this->task = $this->getTask();
    }

    public function submit(){

    }

    public function next(){

    }

    public function render()
    {
        return view('livewire.question');
    }

    private function getTask(): Task
    {
        $id = auth()->user()->id;
        $first = \App\Models\Task::query()
            ->selectRaw('tasks.id AS task_id , count(answered_tasks.answered_correctly) AS answered_correctly_count')
            ->leftJoin('answered_tasks', function ($join) use ($id) {
                $join->on('answered_tasks.task_id', '=', 'tasks.id')
                    ->where('user_id', $id)
                    ->where('answered_correctly', 1);
            })
            ->groupBy('tasks.id');
        $second = \App\Models\Task::query()
            ->selectRaw('tasks.*, count(answered_tasks.task_id) AS total_answered_count, answered_correctly_count')
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
