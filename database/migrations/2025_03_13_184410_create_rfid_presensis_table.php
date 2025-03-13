<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rfid_presensis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_sdm')->unsigned();
            $table->foreign('id_sdm')->references('id')->on('rfid_sdms');
            $table->time('entry_time');
            $table->time('clock_out')->nullable();
            $table->enum('status', ['in', 'out']);
            $table->string('information');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rfid_presensis');
    }
};
