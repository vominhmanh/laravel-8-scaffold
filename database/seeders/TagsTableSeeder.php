<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => 'HTML',
        ]);
        Tag::create([
            'name' => 'PHP',
        ]);
        Tag::create([
            'name' => 'Laravel',
        ]);
        Tag::create([
            'name' => 'Frontend',
        ]);
        Tag::create([
            'name' => 'Backend',
        ]);
        for ($i = 1; $i <= 100; $i++) {
            $course = Course::find($i);
            $course->tags()->sync([1, 2, 3, 5]);
        }
    }
}
