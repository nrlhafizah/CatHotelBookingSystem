<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerprofTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ownerprof', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->string('service1')->nullable();
            $table->string('desc1')->nullable();
            $table->string('service2')->nullable();
            $table->string('desc2')->nullable();
            $table->string('service3')->nullable();
            $table->string('desc3')->nullable();
            $table->string('service4')->nullable();
            $table->string('desc4')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
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
        Schema::dropIfExists('ownerprof');
    }
}
