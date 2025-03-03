<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_description',
        'completion_date',
        'status_id',
        'user_id',
    ];


    public function status()
    {
        return $this->belongsTo(TaskStatus::class);
    }
}
