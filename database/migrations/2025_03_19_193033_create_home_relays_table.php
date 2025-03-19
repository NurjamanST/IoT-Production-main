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
        Schema::create('home_relays', function (Blueprint $table) {
            $table->id();
            $table->boolean('relay1');
            $table->boolean('relay2');
            $table->boolean('relay3');
            $table->boolean('relay4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_relays');
    }
};
