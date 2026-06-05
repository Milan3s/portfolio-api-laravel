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
        Schema::create('experiences', function (Blueprint $table) {

            /**
             * Primary Key
             */
            $table->id();

            /**
             * Relations
             */
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');

            /**
             * Experience Information
             */
            $table->string('company');

            $table->string('position');

            $table->text('description')
                ->nullable();

            $table->longText('details')
                ->nullable();

            /**
             * UI / Timeline
             */
            $table->string('icon')
                ->nullable();

            $table->string('color')
                ->nullable();

            /**
             * Dates
             */
            $table->date('start_date');

            $table->date('end_date')
                ->nullable();

            $table->boolean('currently_working')
                ->default(false);

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
        Schema::dropIfExists('experiences');
    }
};
