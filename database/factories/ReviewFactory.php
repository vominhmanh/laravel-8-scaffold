<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    public function definition()
    {
        return [
            'course_id' => $this->faker->numberBetween(1, 200),
            'rating_point' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->paragraph(1, true),
            'user_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
