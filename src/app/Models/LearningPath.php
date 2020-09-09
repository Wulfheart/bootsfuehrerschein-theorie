<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LearningPath extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'license_id',
        'exam_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'license_id' => 'integer',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'exam_at',
    ];


    public function answeredTasks()
    {
        return $this->hasMany(\App\Models\AnsweredTasks::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function license()
    {
        return $this->belongsTo(\App\Models\License::class);
    }

}
