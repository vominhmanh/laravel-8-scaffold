<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'price',
        'start_date',
        'finish_date',
        'description',
        'teacher_name',
    ];

    public function user() 
    {
        return $this -> belongsToMany(User::class);
    }

    public function review() 
    {
        return $this -> hasMany(Review::class);
    }

    public function tag() 
    {
        return $this -> hasMany(Tag::class);
    }

}
