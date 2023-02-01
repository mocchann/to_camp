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
        Schema::create('campgrounds_information', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('phone_number', 21);
            $table->integer('holiday');
            $table->string('season');
            $table->string('check_in');
            $table->string('check_out');
            $table->string('image');
            $table->string('url');
            $table->decimal('latitude', $precision = 12, $scale = 9);
            $table->decimal('longitude', $precision = 12, $scale = 9);
            $table->string('place_id');
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
        Schema::dropIfExists('campgrounds_information');
    }
};
