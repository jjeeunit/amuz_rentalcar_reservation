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
            $table->string('cid');
            $table->timestamps();
            $table->softDeletes();
            $table->string('rpossible');

            $table->foreign('cid')
            ->references('id')
            ->on('cars')
            ->onDelete('cascade');
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
