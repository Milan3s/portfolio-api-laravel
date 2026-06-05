<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class SocialLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('social_links')->insert([

            [
                'user_id' => 1,

                'platform' => 'LinkedIn',

                'url' => 'https://www.linkedin.com/in/david-milanés/',

                'icon' => 'linkedin',

                'order_index' => 1,

                'is_active' => true,

                'created_at' => now(),

                'updated_at' => now()
            ],

            [
                'user_id' => 1,

                'platform' => 'GitHub',

                'url' => 'https://github.com/Milan3s?tab=repositories',

                'icon' => 'github',

                'order_index' => 2,

                'is_active' => true,

                'created_at' => now(),

                'updated_at' => now()
            ]

        ]);
    }
}
