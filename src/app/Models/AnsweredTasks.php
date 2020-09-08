<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnsweredTasks extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task_id',
        'learning_path_id',
        'answered_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'task_id' => 'integer',
        'learning_path_id' => 'integer',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'answered_at',
    ];


    public function task()
    {
        return $this->belongsTo(\App\Models\Task::class);
    }

    public function learningPath()
    {
        return $this->belongsTo(\App\Models\LearningPath::class);
    }
}
