<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Lesson extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'video_link',
        'duration',
    ];

    public function users() 
    {
        return $this->belongsToMany(User::class);
    }

    public function comments() 
    {
        return $this->hasMany(Comment::class);
    }
}
