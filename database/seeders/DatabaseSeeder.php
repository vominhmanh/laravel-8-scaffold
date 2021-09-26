<?php

namespace Database\Seeders;

use App\Models\Course;
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
        User::factory(10)->create();
        Course::factory(200)->create();
    }
}
