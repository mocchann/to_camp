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
        Schema::create('section_sites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('campground_id')->constrained()->cascadeOnDelete();
            $table->integer('min_size');
            $table->integer('max_size');
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
        Schema::dropIfExists('section_sites');
    }
};
