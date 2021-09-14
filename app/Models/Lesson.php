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

    public function user() 
    {
        return $this -> belongsToMany(User::class);
    }

    public function comment() 
    {
        return $this -> hasMany(Comment::class);
    }

}
