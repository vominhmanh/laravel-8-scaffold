<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->insert([
            'name' => 'Slide_HTML_CSS_01.pdf',
            'path' => "programs/Slide_HTML_CSS_01.pdf",
            'lesson_id' => 7,
        ]);
        DB::table('programs')->insert([
            'name' => 'Slide_HTML_CSS_02.pdf',
            'path' => "programs/Slide_HTML_CSS_02.pdf",
            'lesson_id' => 7,
        ]);
    }
}
