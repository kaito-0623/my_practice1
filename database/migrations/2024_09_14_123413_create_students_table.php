<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration {
    public function up() {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('grade');
            $table->string('name');
            $table->string('address');
            $table->string('img_path')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('students');
    }
}

