<?php

namespace App\Http\Livewire;

use App\Models\AnsweredTasks;
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
    public int $selected;
    public bool $locked = false;
    public int $answered;
    public int $answered_correctly;

    public array $alphabet = ["A", "B", "C", "D"];

    public function mount()
    {
        // $this->task = $this->getTask();
        $this->selected = 0;
        $this->locked = false;
        $this->assignTask();
        $this->emit("scrollToQuestion");
        $this->calculateStats();
    }

    public function answer()
    {
        $this->showSolution = true;
        $correct = $this->responses->firstWhere('correct', '=', true)->id == $this->selected;
        if (!$correct) {
            $this->emit("scrollToQuestion");
        }
        $at = new AnsweredTasks;
        $at->task_id = $this->task->id;
        $at->user_id = auth()->user()->id;
        $at->answered_at = now();
        $at->answered_correctly = $correct;
        $at->save();
        $this->calculateStats();
    }

    public function next()
    {
        $this->showSolution = 0;
        $this->selected = 0;
        $this->assignTask();
        $this->emit("scrollToQuestion");
        $this->locked = false;
    }

    public function render()
    {
        return view('livewire.question');
    }

    private function calculateStats(): void{
        $this->answered = auth()->user()
        ->answeredTasks()
        ->whereRAW('DATE(answered_at) = CURDATE()')
        ->join('tasks', 'answered_tasks.task_id', 'tasks.id')
        ->where('license_id', $this->license->id)
        ->count();
        $this->answered_correctly = auth()->user()
        ->answeredTasks()
        ->whereRAW('DATE(answered_at) = CURDATE()')
        ->join('tasks', 'answered_tasks.task_id', 'tasks.id')
        ->where('license_id', $this->license->id)
        ->where('answered_correctly', true)
        ->count();
    }

    private function assignTask(): void
    {
        $this->task = $this->getTask();
        $this->responses = $this->task->responses->shuffle();
        $this->media = $this->task->getMedia();
        
    }

    private function getTask(): Task
    {
        $id = auth()->user()->id;
        $first = \App\Models\Task::query()
            ->selectRaw(
                'tasks.id AS task_id , count(answered_tasks.answered_correctly) AS answered_correctly_count'
            )
            ->where('license_id', '=', $this->license->id)
            ->leftJoin('answered_tasks', function ($join) use ($id) {
                $join
                    ->on('answered_tasks.task_id', '=', 'tasks.id')
                    ->where('user_id', $id)
                    ->where('answered_correctly', 1);
            })
            ->groupBy('tasks.id');

        $second = \App\Models\Task::query()
            ->selectRaw(
                'tasks.*, count(answered_tasks.task_id) AS total_answered_count, answered_correctly_count'
            )
            ->leftJoin('answered_tasks', function ($join) use ($id) {
                $join
                    ->on('answered_tasks.task_id', '=', 'tasks.id')
                    ->where('user_id', $id);
            })
            ->joinSub($first, 'correct_count', function ($join) {
                $join->on('tasks.id', '=', 'correct_count.task_id');
            })
            ->groupBy('tasks.id')
            ->where('tasks.license_id', $this->license->id)
            ->with('responses')
            ->orderBy('answered_correctly_count')
            ->orderBy('total_answered_count');
            
        $clone = clone $second;
        $min = $clone->first();
        return $second->having('total_answered_count', $min->total_answered_count)->having('answered_correctly_count', $min->answered_correctly_count)->inRandomOrder()->first();
    }
}
