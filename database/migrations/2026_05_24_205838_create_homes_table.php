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
        Schema::create('home', function (Blueprint $table) {

            /**
             * Primary Key
             */
            $table->id();

            /**
             * User Relationship
             */
            $table->foreignId('user_id')
                ->unique()
                ->constrained('users')
                ->cascadeOnDelete();

            /**
             * Basic Information
             */
            $table->string('name', 100);

            $table->string('full_name', 150);

            $table->string('headline')
                ->nullable();

            $table->text('description')
                ->nullable();

            $table->string('badge_text')
                ->nullable();

            /**
             * Experience
             */
            $table->unsignedTinyInteger('years_experience')
                ->default(0);

            /**
             * Status
             */
            $table->boolean('is_active')
                ->default(true);

            /**
             * Media
             */
            $table->string('logo_url')
                ->nullable();

            /**
             * Timestamps
             */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home');
    }
};
