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
        Schema::create('campground_information_late_checkout', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('campground_information_id');
            $table->unsignedBigInteger('late_checkout_id');
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
        Schema::dropIfExists('campground_information_late_checkout');
    }
};
