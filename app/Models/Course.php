<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

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
        return $this->belongsToMany(Tag::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function getPriceAttribute($price)
    {
        return number_format($price);
    }

    public function getHoursAttribute()
    {
        return floor($this->getLessonsSumDurationAttribute() / 60);
    }

    public function getMinutesAttribute()
    {
        return $this->getLessonsSumDurationAttribute() % 60;
    }

    public function getIsJoinedAttribute()
    {
        return $this->users->contains(Auth::user()->id ?? false);
    }

    public function getLessonsCountAttribute()
    {
        return $this->lessons()->count();
    }

    public function getUsersCountAttribute()
    {
        return $this->users()->count();
    }

    public function getLessonsSumDurationAttribute()
    {
        return $this->lessons()->sum('duration');
    }

    public function getReviewsAvgRatingPointAttribute()
    {
        return $this->reviews()->avg('rating_point');
    }

    public function getReviewsCountAttribute()
    {
        return $this->reviews()->count() ?: 1;
    }

    public function getStudiedLessonsCountAttribute()
    {
        return $this->lessons()->whereHas('users', function ($q) {
            $q->where('users.id', Auth::user()->id ?? null);
        })->count();
    }

    public function scopeKeyWord($query, $keyword)
    {
        return $query->where('name', 'like', '%' . $keyword . '%')->orWhere('description', 'like', '%' . $keyword . '%');
    }

    public function scopeTeacher($query, $teacher)
    {
        if (isset($teacher)) {
            $query->where('teacher_id', $teacher);
        }
        return $query;
    }

    public function scopeTag($query, $tag)
    {
        if (isset($tag)) {
            $query->whereHas('tags', function ($q) use ($tag) {
                $q->where('tags.id', $tag);
            });
        }
        return $query;
    }

    public function scopeCreatedAt($query, $createdAt)
    {
        if (isset($createdAt)) {
            $query->orderBy('created_at', $createdAt);
        }
        return $query;
    }

    public function scopeLearners($query, $learners)
    {
        if (isset($learners)) {
            $query->withCount('users')->orderBy('users_count', $learners);
        }
        return $query;
    }

    public function scopeDuration($query, $duration)
    {
        if (isset($duration)) {
            $query->withSum('lessons', 'duration')
                ->orderBy('lessons_sum_duration', $duration);
        }
        return $query;
    }

    public function scopeLessons($query, $lessons)
    {
        if (isset($lessons)) {
            $query->withCount('lessons')->orderBy('lessons_count', $lessons);
        }
        return $query;
    }

    public function scopeRatings($query, $ratings)
    {
        if (isset($ratings)) {
            $query->withAvg('reviews', 'rating_point')->orderBy('reviews_avg_rating_point', $ratings);
        }
        return $query;
    }

    public function scopeFilter($query)
    {
        return $query->keyword(request('keyword'))
            ->teacher(request('teacher'))
            ->tag(request('tag'))
            ->learners(request('learners'))
            ->duration(request('duration'))
            ->lessons(request('lessons'))
            ->ratings(request('ratings'))
            ->createdat(request('created_at'));
    }

    public function scopeSuggestion($query)
    {
        return $query->ratings('desc')->limit(config('variables.limit_suggestion'));
    }

    public function scopeHomepage($query)
    {
        return $query->ratings('desc')->limit(config('variables.limit_homepage'));
    }

    public function scopeRandom($query)
    {
        return $query->inRandomOrder()->limit(config('variables.limit_homepage'));
    }
}
