<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([

            [
                'name' => 'Administrador',
                'slug' => 'ADMIN',
                'description' => 'Acceso completo al sistema',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Usuario',
                'slug' => 'USER',
                'description' => 'Usuario estándar',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]

        ]);
    }
}
