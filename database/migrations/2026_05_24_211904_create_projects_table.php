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
        Schema::create('projects', function (Blueprint $table) {

            /**
             * Primary Key
             */
            $table->id();

            /**
             * Relationships
             */
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            /**
             * Content
             */
            $table->string('title');

            $table->string('slug')
                ->unique();

            $table->text('description')
                ->nullable();

            /**
             * Project Icon
             */
            $table->string('icon')
                ->nullable();

            /**
             * Project Type
             */
            $table->string('type');

            /**
             * Technologies
             *
             * Ejemplo:
             * Vue
             * Express
             * MySQL
             */
            $table->text('technologies')
                ->nullable();

            /**
             * Links
             */
            $table->string('github_url')
                ->nullable();

            $table->string('video_url')
                ->nullable();

            /**
             * Status
             */
            $table->string('status')
                ->default('Disponible');

            /**
             * Timestamps
             */
            $table->timestamps();

            /**
             * Indexes
             */
            $table->index('slug');

            $table->index('type');

            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
