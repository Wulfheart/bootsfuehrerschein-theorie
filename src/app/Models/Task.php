<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class Task extends Model
{
    use InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question',
        'license_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'license_id' => 'integer',
    ];


    public function responseAnsweredTasks()
    {
        return $this->hasMany(\App\Models\ResponseAnsweredTasks::class);
    }

    public function license()
    {
        return $this->belongsTo(\App\Models\License::class);
    }
}
