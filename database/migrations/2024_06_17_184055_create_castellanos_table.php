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
        Schema::create('castellanos', function (Blueprint $table) {
            $table->id();
            $table->string('palabra', 30)->nullable();
            $table->string('significado_quechua', 1500)->nullable();
            $table->string('significado_aymara', 1500)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('castellanos');
    }
};
