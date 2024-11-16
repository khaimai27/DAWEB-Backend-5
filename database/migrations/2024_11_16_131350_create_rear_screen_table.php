<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('screen', function (Blueprint $table) {
            $table->id();
            $table->string('technoscreen', 30);
            $table->string('resolution', 60);
            $table->string('size', 20);
            $table->string('brightness', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rear_screen');
    }
};
