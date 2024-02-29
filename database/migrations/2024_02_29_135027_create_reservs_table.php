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
        Schema::create('reservs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cid')->constrained('cars');
            $table->timestamps();
            $table->softDeletes('reservated_at');
            $table->string('cpossible');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservs');
    }
};
