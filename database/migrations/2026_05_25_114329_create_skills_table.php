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
        Schema::create('skills', function (Blueprint $table) {

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
             * Name
             */
            $table->string('name', 150);

            /**
             * Icon
             *
             * Ej:
             * devicon-laravel-plain
             * devicon-react-original
             * devicon-mysql-original
             * devicon-docker-plain
             */
            $table->string('icon', 150);

            /**
             * Description
             */
            $table->text('description');

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
        Schema::dropIfExists('skills');
    }
};
