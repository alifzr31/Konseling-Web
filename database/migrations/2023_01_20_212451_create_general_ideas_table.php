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
        Schema::create('general_ideas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('konsul_id')->references('id')->on('konsuls')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('start_test')->nullable();
            $table->dateTime('end_test')->nullable();
            $table->string('j1')->nullable();
            $table->string('j2')->nullable();
            $table->string('j3')->nullable();
            $table->string('j4')->nullable();
            $table->string('j5')->nullable();
            $table->string('j6')->nullable();
            $table->string('j7')->nullable();
            $table->string('j8')->nullable();
            $table->string('j9')->nullable();
            $table->string('j10')->nullable();
            $table->string('hasil')->nullable();
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
        Schema::dropIfExists('general_ideas');
    }
};
