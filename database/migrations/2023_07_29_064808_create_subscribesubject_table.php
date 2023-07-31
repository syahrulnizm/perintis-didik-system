<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateSubscribesubjectTable extends Migration
{
    public function up()
    {
        Schema::create('subscribesubject', function (Blueprint $table) {
            $table->string('subscribeID', 10);
            $table->string('subjectID', 10);
            $table->primary(['subscribeID', 'subjectID']);
            $table->foreign('subscribeID')->references('subscribeID')->on('subscribe');
            $table->foreign('subjectID')->references('subjectID')->on('subject');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('subscribesubject');
    }
}