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
        Schema::create('anamnesas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('konsul_id')->references('id')->on('konsuls')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('start_test')->nullable();
            $table->dateTime('end_test')->nullable();
            $table->string('bukti_chat')->nullable();
            $table->enum('status', ['belum', 'sudah'])->nullable();
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
        Schema::dropIfExists('anamnesas');
    }
};
