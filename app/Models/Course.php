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

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function scopeKeyWord($query, $keyword)
    {
        return $query->where('name', 'like', '%' . $keyword . '%')->orWhere('description', 'like', '%' . $keyword . '%');
    }

    public function scopeTeacher($query, $teacher)
    {
        if ($teacher != null) {
            return $query->where('teacher_name', $teacher);
        }
        return $query;
    }

    public function scopeTag($query, $tag)
    {
        if ($tag != null) {
            return $query->whereHas('tags', function ($q) use ($tag) {
                $q->where('name', $tag);
            });
        }
        return $query;
    }

    public function scopeCreatedAt($query, $createdAt)
    {
        if ($createdAt != null) {
            return $query->orderBy('created_at', $createdAt);
        }
        return $query;
    }

    public function scopeLearners($query, $learners)
    {
        if ($learners != null) {
            return $query->orderBy('learners', $learners);
        }
        return $query;
    }

    public function scopeDuration($query, $duration)
    {
        if ($duration != null) {
            return $query->orderBy('duration', $duration);
        }
        return $query;
    }

    public function scopeLessons($query, $lessons)
    {
        if ($lessons != null) {
            return $query->orderBy('lessons', $lessons);
        }
        return $query;
    }

    public function scopeRatings($query, $ratings)
    {
        if ($ratings != null) {
            return $query->orderBy('reviews', $ratings);
        }
        return $query;
    }
}
