<?php

namespace App\Http\Livewire;

use App\Models\License;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;
use Livewire\Component;

class Question extends Component
{
    public License $license;
    public Task $task;
    public EloquentCollection $responses;
    public bool $showSolution = false;
    public Collection $media;
    public $selected;

    public array $alphabet = ["A", "B", "C", "D"];

    public function mount()
    {
        // $this->task = $this->getTask();
        $this->task = Task::find(23);
        $this->assignTaskMisc();
    }

    public function submit(){

    }

    public function next(){

    }

    public function render()
    {
        return view('livewire.question');
    }

    private function assignTaskMisc(): void{
        $this->responses = $this->task->responses->shuffle();
        $this->media = $this->task->getMedia();
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
