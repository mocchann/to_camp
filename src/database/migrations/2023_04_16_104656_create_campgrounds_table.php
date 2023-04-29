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
        Schema::create('campgrounds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('phone_number');
            $table->string('holiday');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('check_in_time');
            $table->string('check_out_time');
            $table->string('image');
            $table->string('website_url');
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
        Schema::dropIfExists('campgrounds');
    }
};
