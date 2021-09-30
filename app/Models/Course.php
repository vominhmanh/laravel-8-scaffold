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
        'teacher_id',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function scopeKeyWord($query, $keyword)
    {
        return $query->where('name', 'like', '%' . $keyword . '%')->orWhere('description', 'like', '%' . $keyword . '%');
    }

    public function scopeTeacher($query, $teacher)
    {
        if (isset($teacher)) {
            return $query->where('teacher_id', $teacher);
        }
    }

    public function scopeTag($query, $tag)
    {
        if (isset($tag)) {
            return $query->whereHas('tags', function ($q) use ($tag) {
                $q->where('name', $tag);
            });
        }
    }

    public function scopeCreatedAt($query, $createdAt)
    {
        if (isset($createdAt)) {
            return $query->orderBy('created_at', $createdAt);
        }
    }

    public function scopeLearners($query, $learners)
    {
        $query->withCount('users');
        if (isset($learners)) {
            return $query->orderBy('users_count', $learners);
        }
    }

    public function scopeDuration($query, $duration)
    {
        $query->withSum('lessons', 'duration');
        if (isset($duration)) {
            return $query->orderBy('lessons_sum_duration', $duration);
        }
    }

    public function scopeLessons($query, $lessons)
    {
        $query->withCount('lessons');
        if (isset($lessons)) {
            return $query->orderBy('lessons_count', $lessons);
        }
    }

    public function scopeRatings($query, $ratings)
    {
        $query->withAvg('reviews', 'rating_point');
        if (isset($ratings)) {
            return $query->orderBy('reviews_avg_rating_point', $ratings);
        }
    }

    public function scopeFilter($query, $request)
    {
        return $query->keyword($request->keyword)
            ->teacher($request->teacher)
            ->tag($request->tag)
            ->createdat($request->createdAt)
            ->learners($request->learners)
            ->duration($request->duration)
            ->lessons($request->lessons)
            ->ratings($request->ratings);
    }

    /**
     *
     * This function creates some Aggregrating values for query: count, sum, average.
     * These above methods will place a {relation}_{function}_{column} attribute on your resulting models.
     *
     */
    public function scopeAggregating($query)
    {
        return $query->withAvg('reviews', 'rating_point')
            ->withCount('lessons')
            ->withCount('users')
            ->withSum('lessons', 'duration');
    }
}
