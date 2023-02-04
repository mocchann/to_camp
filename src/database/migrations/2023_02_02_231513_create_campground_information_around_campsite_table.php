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
        Schema::create('campground_information_around_campsite', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campground_informations_id');
            $table->unsignedBigInteger('around_campsites_id');
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
        Schema::dropIfExists('campground_information_around_campsite');
    }
};
