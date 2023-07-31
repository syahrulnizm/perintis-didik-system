<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorTable extends Migration
{
    public function up()
    {
        Schema::create('tutor', function (Blueprint $table) {
            $table->string('userID', 15)->primary();
            $table->string('educationLevel', 45);
            $table->string('workingExperience', 45);
            $table->foreign('userID')->references('userID')->on('user')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tutor');
    }
}