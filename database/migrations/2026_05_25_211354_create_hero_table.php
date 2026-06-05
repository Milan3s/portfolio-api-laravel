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
        Schema::create('hero', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');

            /**
             * Contenido principal
             */
            $table->string('greeting')->nullable();

            $table->string('title');

            $table->string('subtitle')->nullable();

            $table->text('description')->nullable();

            /**
             * CTA
             */
            $table->string('secondary_cta_text')
                ->nullable();

            $table->string('secondary_cta_link')
                ->nullable();

            /**
             * Imagen
             */
            $table->string('image_url')
                ->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero');
    }
};
