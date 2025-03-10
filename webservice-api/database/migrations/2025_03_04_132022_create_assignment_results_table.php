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
        Schema::create('assignment_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sign_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->boolean('is_correct')->default(false)->nullable();
            // In de front-end moet je een if / elseif / else statement maken.
                // als eerst zet je de waarde van de kolom op Null wanneer je het rendert.
                // Als die bestaat oftewel null is dat het geen kleur heeft
                // Als die bestaat en er is een keuze gemaakt zet de waarde op true
                // Anders zet de waarde op false
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignment_results');
    }
};
