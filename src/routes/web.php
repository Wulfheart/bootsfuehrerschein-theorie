<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShowLicenseController;
use App\Http\Livewire\NewLearningPath;
use App\Models\License;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $first = \App\Models\Task::query()

        ->selectRaw('tasks.id AS task_id , count(answered_tasks.answered_correctly) AS answered_correctly_count')
        ->leftJoin('answered_tasks', function ($join) {
            $join->on('answered_tasks.task_id', '=', 'tasks.id')
                ->where('learning_path_id', 1)
                ->where('answered_correctly', 1);
        })
        ->groupBy('tasks.id');



        $second = \App\Models\Task::query()
        ->selectRaw('tasks.*, count(answered_tasks.task_id) AS total_answered_count, answered_correctly_count')
        ->leftJoin('answered_tasks', function($join){
          $join->on('answered_tasks.task_id', '=', 'tasks.id')
            ->where('learning_path_id', 1);
      })
        ->joinSub($first, 'correct_count', function ($join){
            $join->on('tasks.id', '=', 'correct_count.task_id');
        })
        ->groupBy('tasks.id')
        ->with('responses')
        ->inRandomOrder()
        ->orderBy('answered_correctly_count')
        ->orderBy('total_answered_count')
        ->first();
        return $second;
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){

    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/fragen/{license}', function(License $license){
        return view('task', [
            'license' => $license,
        ]);
    })->name('task');
    Route::get('/license/{license}', ShowLicenseController::class)
    ->name('license');
});
