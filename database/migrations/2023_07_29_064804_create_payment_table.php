<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->string('paymentID', 15)->primary();
            $table->string('paymentStatus', 10);
            $table->date('paymentDate');
            $table->timestamp('paymentTime')->useCurrent();
            $table->string('paymentPrice', 20);
            $table->string('paymentAmount', 20);
            $table->string('subscribeID', 10);
            $table->string('packageID', 10);
            $table->foreign('subscribeID')->references('subscribeID')->on('subscribe');
            $table->foreign('packageID')->references('packageID')->on('package');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('payment');
    }
}