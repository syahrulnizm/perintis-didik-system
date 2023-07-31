<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageTable extends Migration
{
    public function up()
    {
        Schema::create('package', function (Blueprint $table) {
            $table->string('packageID', 10)->primary();
            $table->string('packageName', 100);
            $table->string('packageQuantity', 20);
            $table->string('packagePrice', 20);
            $table->string('eduID', 10);
            $table->foreign('eduID')->references('eduID')->on('educationlevel');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('package');
    }
}
