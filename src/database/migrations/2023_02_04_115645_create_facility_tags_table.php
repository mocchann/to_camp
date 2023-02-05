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
        Schema::create('facility_tags', function (Blueprint $table) {
            $table->id();
            $table->boolean('gate');
            $table->boolean('manager_resident');
            $table->boolean('manager_on_time');
            $table->boolean('trash');
            $table->boolean('coin_shower');
            $table->boolean('free_shower');
            $table->boolean('washlet');
            $table->boolean('flush_toilet');
            $table->boolean('simple_toilet');
            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facility_tags');
    }
};
