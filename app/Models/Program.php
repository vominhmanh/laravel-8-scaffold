<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'path',
        'lesson_id',
    ];

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
