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
        Schema::create('aymara_detalles', function (Blueprint $table) {
            $table->unsignedBigInteger('castellano_id');
            $table->unsignedBigInteger('aymara_id');
            $table->timestamps();

            $table->foreign('castellano_id')->references('id')->on('castellanos')->onDelete('cascade');
            $table->foreign('aymara_id')->references('id')->on('aymaras')->onDelete('cascade');

            $table->primary(['castellano_id', 'aymara_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aymara_detalles');
    }
};
