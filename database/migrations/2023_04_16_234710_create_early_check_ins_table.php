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
        Schema::create('early_check_ins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('campground_id')->constrained()->cascadeOnDelete();
            $table->time('start_time');
            $table->integer('site_price');
            $table->integer('adult_price');
            $table->integer('child_price');
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
        Schema::dropIfExists('early_check_ins');
    }
};
