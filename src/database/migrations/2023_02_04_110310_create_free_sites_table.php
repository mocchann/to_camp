<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_sites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campground_information_id');
            $table->bigInteger('min_size');
            $table->bigInteger('max_size');
            $table->bigInteger('site_price');
            $table->bigInteger('adult_price');
            $table->bigInteger('child_price');
            $table->bigInteger('description');
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
        Schema::dropIfExists('free_sites');
    }
};
