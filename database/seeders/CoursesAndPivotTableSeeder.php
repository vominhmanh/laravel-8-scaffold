<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;

class CoursesAndPivotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::factory(200);
        for ($i = 1; $i <= 200; $i++) {
            $course = Course::find($i);
            $course->users()->sync([1, 3, 5, 7]);
        }
    }
}