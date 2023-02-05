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
        Schema::create('other_tags', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_all_season');
            $table->boolean('early_checkin');
            $table->boolean('late_checkout');
            $table->boolean('is_day_camp');
            $table->boolean('is_firewood');
            $table->boolean('is_ten_minute_walk');
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
        Schema::dropIfExists('other_tags');
    }
};
