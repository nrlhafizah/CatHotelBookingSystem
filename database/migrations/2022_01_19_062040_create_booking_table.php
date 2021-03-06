<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->integer('phoneNumber');
            $table->integer('totalCats');
            $table->date('checkIn');
            $table->date('checkOut');
            $table->string('additional');
            $table->integer('UserID');
            $table->integer('hotelID');
            $table->string('hotelName');
            $table->string('status')->default("Ongoing");
            $table->boolean('mark')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
