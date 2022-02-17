<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvregTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provreg', function (Blueprint $table) {
            $table->id();
            $table->integer('phoneNumber');
            $table->string('hotelName');
            $table->string('address');
            $table->integer('SSM');
            $table->integer('user_id');
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
        Schema::dropIfExists('provreg');
    }
}
