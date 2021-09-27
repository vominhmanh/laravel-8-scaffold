<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween(100, 999) * 1000,
            'start_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'finish_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true) ,
            'teacher_name' => $this->faker->name(),
            'logo' => $this->faker->imageUrl($width = 90, $height = 90),
        ];
    }
}