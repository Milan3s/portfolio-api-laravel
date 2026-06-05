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
        Schema::create('services', function (Blueprint $table) {

            /**
             * Primary Key
             */
            $table->id();

            /**
             * User Owner
             */
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            /**
             * Service Title
             */
            $table->string('title', 200);

            /**
             * SEO Slug
             */
            $table->string('slug', 200)
                ->unique();

            /**
             * Service Icon
             *
             * Ejemplos:
             * fa-code
             * fa-wordpress
             * fa-computer
             * fa-mobile-screen
             */
            $table->string('icon', 150);

            /**
             * Service Description
             *
             * Se almacenan únicamente los <li>
             * para ser renderizados como una UL
             * desde React.
             */
            $table->longText('description');

            /**
             * Timestamp
             */
            $table->timestamp('created_at')
                ->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
