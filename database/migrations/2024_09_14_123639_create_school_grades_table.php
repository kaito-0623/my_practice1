<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolGradesTable extends Migration {
    public function up() {
        Schema::create('school_grades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->integer('grade');
            $table->string('term');
            $table->integer('japanese');
            $table->integer('math');
            $table->integer('science');
            $table->integer('social_studies');
            $table->integer('music');
            $table->integer('home_economics');
            $table->integer('english');
            $table->integer('art');
            $table->integer('health_and_physical_education');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('school_grades');
    }
}

