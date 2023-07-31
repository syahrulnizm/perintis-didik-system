<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministratorTable extends Migration
{
    public function up()
    {
        Schema::create('administrator', function (Blueprint $table) {
            $table->string('userID', 15)->primary();
            $table->string('adminRoles', 45);
            $table->string('officeNumber', 10);
            $table->foreign('userID')->references('userID')->on('user')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('administrator');
    }
}