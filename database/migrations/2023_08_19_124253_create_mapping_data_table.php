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
        Schema::create('mapping_data', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->unsignedBigInteger('main_data_id');
            $table->enum('condition', ['A', 'B', 'C']);
            $table->timestamps();

            $table->foreign('main_data_id')->references('id')->on('main_data')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapping_data');
    }
};
