<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id(); // Kolom ID
            $table->string('product'); // Kolom product
            $table->string('skin_type'); // Kolom skin_type
            $table->string('conditions')->nullable(); // Kolom conditions
            $table->integer('rating'); // Kolom rating
            $table->text('review')->nullable(); // Kolom review
            $table->timestamps(); // Kolom created_at dan updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
