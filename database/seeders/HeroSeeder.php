<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Hero;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::create([

            'user_id' => 1,

            'greeting' => '',

            'title' => 'Desarrollador',

            'subtitle' => 'Full Stack',

            'description' => 'Desarrollo aplicaciones desde una idea inicial, convirtiéndolas en experiencias digitales útiles, modernas y pensadas para que realmente se sientan rápidas, intuitivas y agradables de utilizar.',

            'secondary_cta_text' => 'Descargar CV',

            'secondary_cta_link' => 'Curriculum-Profesional-David-Milanes-Moreno.pdf',

            'image_url' => 'avatar.png',
        ]);
    }
}
