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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', );
            $table->rememberToken();
            $table->timestamps();

            $table->softDeletes();

            $table->boolean('exist')->nullable()->storedAs('case when deleted_at is null then 1 else null end');

            $table->unique(['email', 'exist']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
