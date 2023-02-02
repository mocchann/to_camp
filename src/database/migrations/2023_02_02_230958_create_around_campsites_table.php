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
        Schema::create('around_campsites', function (Blueprint $table) {
            $table->id();
            $table->string('near_staion');
            $table->string('near_interchange');
            $table->string('near_spa');
            $table->string('near_supermarket');
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
        Schema::dropIfExists('around_campsites');
    }
};
