<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Review;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        User::factory(200)->create();
        Course::factory(100)->create();
        Review::factory(500)->create();
        Lesson::factory(1000)->create();
        $this->call(CoursesAndPivotTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(ProgramsTableSeeder::class);
    }
}
