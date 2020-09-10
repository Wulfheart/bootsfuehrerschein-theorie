<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnsweredTasks extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task_id',
        'user_id',
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
        'user_id' => 'integer',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'answered_at',
    ];

    public function scopeCurrentUser($query){
        return $query->where('user_id', auth()->user()->id);
    }

    public function task()
    {
        return $this->belongsTo(\App\Models\Task::class);
    }

  

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
