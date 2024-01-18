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
        Schema::create('structures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quartier_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('type');
            $table->string('nom');
            $table->string('contact');
            $table->string('map');
            $table->string('horaire');
            $table->string('assurance');
            $table->string('code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('structures');
    }
};
