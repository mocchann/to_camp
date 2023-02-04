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
        Schema::create('site_tags', function (Blueprint $table) {
            $table->id();
            $table->boolean('section_site');
            $table->boolean('free_site');
            $table->boolean('cancel');
            $table->boolean('ground_turf');
            $table->boolean('ground_soil');
            $table->boolean('ground_wood_deck');
            $table->boolean('ground_sand');
            $table->boolean('bonfire');
            $table->boolean('direct_fire');
            $table->boolean('car');
            $table->boolean('pet');
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
        Schema::dropIfExists('site_tags');
    }
};
