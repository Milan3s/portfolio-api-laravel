<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([

            [
                'user_id' => 1,

                'full_name' => 'David Milanés',

                'title' => 'Backend Developer',

                'bio' => 'Especialista en Spring Boot y APIs REST',

                'avatar_url' => 'avatar.png',

                'available_for_work' => true,

                'created_at' => now(),

                'updated_at' => now()
            ]

        ]);
    }
}
