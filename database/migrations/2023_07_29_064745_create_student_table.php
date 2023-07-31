<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->string('userID', 15)->primary();
            $table->string('guardianName', 100);
            $table->string('studentAddress', 200);
            $table->string('guardianNumber', 15);
            $table->foreign('userID')->references('userID')->on('user')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student');
    }
}