<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('logo')->nullable();
            $table->integer('learners')->nullable();
            $table->integer('lessons')->nullable();
            $table->integer('quizzes')->nullable();
            $table->integer('duration')->nullable();
            $table->integer('rating_point')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn(['learners', 'lessons', 'quizzes', 'duration', 'rating_point']);
        });
    }
}