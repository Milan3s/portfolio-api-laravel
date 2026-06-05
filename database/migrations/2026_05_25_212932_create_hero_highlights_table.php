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
        Schema::create('hero_highlights', function (Blueprint $table) {

            $table->id();

            $table->foreignId('hero_id')
                ->constrained('hero')
                ->onDelete('cascade');

            $table->string('title', 150);

            $table->string('description', 255)
                ->nullable();

            $table->string('icon', 100)
                ->nullable();

            $table->integer('order_index')
                ->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_highlights');
    }
};
