<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Hapo Tester',
            'email' => 'test@haposoft.com',
            'password' => bcrypt('12345678'),
            'introduction' => 'Hello, my name is HapoTest. I\'m twenty-one years old.',
            'role' => 1,
        ]);

        User::create([
            'name' => 'VO MINH MANH',
            'email' => 'vominhmanh29@gmail.com',
            'password' => bcrypt('12345678'),
            'introduction' => 'Hello, my name is Minh Manh Vo. I\'m twenty-one years old.',
            'role' => 1,
        ]);
    }
}
