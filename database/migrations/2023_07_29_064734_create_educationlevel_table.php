<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateEducationlevelTable extends Migration
{
    public function up()
    {
        Schema::create('educationlevel', function (Blueprint $table) {
            $table->string('eduID', 10)->primary();
            $table->string('eduName', 45);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('educationlevel');
    }
}