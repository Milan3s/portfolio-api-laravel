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
        Schema::create('social_links', function (Blueprint $table) {

            $table->id();

            /**
             * Relación con usuario
             */
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            /**
             * Información red social
             */
            $table->string('platform', 100);

            $table->string('url', 255);

            $table->string('icon', 100)
                ->nullable();

            /**
             * Orden visual
             */
            $table->unsignedInteger('order_index')
                ->default(0);

            /**
             * Estado
             */
            $table->boolean('is_active')
                ->default(true);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_links');
    }
};
