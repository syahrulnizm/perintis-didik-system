<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->string('userID', 15)->primary();
            $table->string('userName', 100);
            $table->string('userNumber', 15);
            $table->string('userEmail', 225);
            $table->string('password', 254);
            $table->date('userCreateDate');
            $table->string('userStatus', 10);
            $table->enum('userType', ['Student', 'Tutor', 'Admin'])->default('Student');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user');
    }
}