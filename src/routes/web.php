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
    return redirect()->route('dashboard');
});
Route::get('/impressum', function(){
    return view('impressum');
})->name('impressum');

Route::get('/datenschutz', function(){
    return view('datenschutz');
})->name('datenschutz');

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
