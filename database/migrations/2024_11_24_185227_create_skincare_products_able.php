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
        Schema::create('skincare_products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('skin_type'); // Oily, Dry, Combination, Sensitive
            $table->json('conditions'); // E.g., Acne, Redness
            $table->float('rating')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skincare_products'); // Corrected table name
    }
};
