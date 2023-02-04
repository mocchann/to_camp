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
        Schema::create('early_checkins', function (Blueprint $table) {
            $table->id();
            $table->time('start_time');
            $table->bigInteger('site_price');
            $table->bigInteger('adult_price');
            $table->bigInteger('child_price');
            $table->string('description');
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
        Schema::dropIfExists('early_checkins');
    }
};
