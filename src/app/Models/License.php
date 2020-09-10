<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];


    public function tasks()
    {
        return $this->hasMany(\App\Models\Task::class);
    }

    public function answeredTasks(){
        return $this->hasManyThrough(\App\Models\AnsweredTasks::class, \App\Models\Task::class);
    }
}
