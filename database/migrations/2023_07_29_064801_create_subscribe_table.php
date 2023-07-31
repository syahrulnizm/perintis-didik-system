<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribeTable extends Migration
{
    public function up()
    {
        Schema::create('subscribe', function (Blueprint $table) {
            $table->string('subscribeID', 10)->primary();
            $table->date('subscribeDate');
            $table->string('subscriptionStatus', 10);
            $table->string('isPaid', 10);
            $table->string('studentID', 15);
            $table->string('adminID', 15);
            $table->string('packageID', 10);
            $table->foreign('studentID')->references('userID')->on('student');
            $table->foreign('adminID')->references('userID')->on('administrator');
            $table->foreign('packageID')->references('packageID')->on('package');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('subscribe');
    }
}