<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectTable extends Migration
{
    public function up()
    {
        Schema::create('subject', function (Blueprint $table) {
            $table->string('subjectID', 10)->primary();
            $table->string('subjectName', 45);
            $table->time('time');
            $table->string('day', 10);
            $table->string('duration', 20);
            $table->string('tutorID', 15);
            $table->string('eduID', 10);
            $table->foreign('tutorID')->references('userID')->on('tutor');
            $table->foreign('eduID')->references('eduID')->on('educationlevel');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('subject');
    }
}