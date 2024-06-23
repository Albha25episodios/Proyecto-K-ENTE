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
        Schema::create('quechua_detalles', function (Blueprint $table) {
            $table->unsignedBigInteger('castellano_id');
            $table->unsignedBigInteger('quechua_id');
            $table->timestamps();

            $table->foreign('castellano_id')->references('id')->on('castellanos')->onDelete('cascade');
            $table->foreign('quechua_id')->references('id')->on('quechuas')->onDelete('cascade');

            $table->primary(['castellano_id', 'quechua_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quechua_detalles');
    }
};
