<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailProviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_provider', function (Blueprint $table) {
            $table->id();
            $table->integer('userID');
            $table->integer('phoneNumber')->nullable();
            $table->string('hotelName')->nullable();
            $table->string('address')->nullable();
            $table->integer('postcode')->nullable();
            $table->string('state')->nullable();
            $table->integer('SSM')->nullable();
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
        Schema::dropIfExists('detail_provider');
    }
}
