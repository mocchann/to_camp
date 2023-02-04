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
        Schema::create('location_tags', function (Blueprint $table) {
            $table->id();
            $table->boolean('sea');
            $table->boolean('lake');
            $table->boolean('river');
            $table->boolean('mountain');
            $table->boolean('woods');
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
        Schema::dropIfExists('location_tags');
    }
};
