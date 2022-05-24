<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_detail', function (Blueprint $table) {
            $table->id();
            $table->integer('userID');
            $table->integer('phoneNumber')->nullable();
            $table->string('hotelName')->nullable();
            $table->string('address')->nullable();
            $table->integer('postcode')->nullable();
            $table->string('state')->nullable();
            $table->biginteger('SSM')->nullable();
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
        Schema::dropIfExists('hotel_detail');
    }
}
