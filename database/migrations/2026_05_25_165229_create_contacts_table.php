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
        Schema::create('contacts', function (Blueprint $table) {

            /**
             * Primary Key
             */
            $table->id();

            /**
             * Relations
             */
            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            /**
             * Contact Information
             */
            $table->string('name');

            $table->string('email');

            $table->string('subject')
                ->nullable();

            $table->text('message');

            /**
             * Message Status
             */
            $table->string('status')
                ->default('PENDING');

            $table->boolean('hidden')
                ->default(false);

            /**
             * Security / Metadata
             */
            $table->string('ip_address')
                ->nullable();

            $table->text('user_agent')
                ->nullable();

            /**
             * Reply Information
             */
            $table->timestamp('replied_at')
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
        Schema::dropIfExists('contacts');
    }
};
