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
        Schema::create('prove', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("idPersona");

            $table->unsignedInteger("idProducto");

            $table->date("fechaEntrega");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prove');
    }
};
