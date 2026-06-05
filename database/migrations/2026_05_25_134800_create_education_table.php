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
        Schema::create('education', function (Blueprint $table) {

            /**
             * Primary Key
             */
            $table->id();

            /**
             * Relations
             */
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            /**
             * Main Information
             */
            $table->string('title');

            $table->string('subtitle')
                ->nullable();

            $table->string('institution');

            $table->string('location')
                ->nullable();

            /**
             * Academic Information
             */
            $table->string('education_level')
                ->nullable();

            $table->string('plan')
                ->nullable();

            $table->string('start_year')
                ->nullable();

            $table->string('end_year')
                ->nullable();

            $table->string('status')
                ->nullable();

            $table->string('fct_status')
                ->nullable();

            $table->string('project_grade')
                ->nullable();

            /**
             * Certificate Information
             */
            $table->string('certificate_type')
                ->nullable();

            // Ej:
            // Certificado Oficial
            // Certificado Profesional
            // Formación Técnica
            // Especialización

            $table->string('provider')
                ->nullable();

            // Ej:
            // SEF
            // Udemy
            // OpenWebinars

            /**
             * Modules / Skills
             */
            $table->json('modules')
                ->nullable();

            // Para luego traducir fácilmente:
            // [
            //   "Gestión de servicios en el sistema informático",
            //   "Desarrollo de elementos software para gestión de sistemas"
            // ]

            /**
             * Visual
             */
            $table->string('icon')
                ->nullable();

            $table->string('color')
                ->nullable();

            /**
             * Type
             */
            $table->string('type');

            // academic
            // certification
            // course

            /**
             * Sorting
             */
            $table->integer('order_index')
                ->default(0);

            /**
             * Visibility
             */
            $table->boolean('is_visible')
                ->default(true);

            /**
             * Timestamps
             */
            $table->timestamp('created_at')
                ->useCurrent();

            $table->timestamp('updated_at')
                ->nullable()
                ->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
