<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\HeroHighlight;

class HeroHighlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeroHighlight::create([

            'hero_id' => 1,

            'title' => 'Desarrollo end-to-end',

            'description' => 'Me encargo de todo el ciclo de vida de tus aplicaciones.',

            'icon' => 'fa-solid fa-code',

            'order_index' => 1
        ]);

        HeroHighlight::create([

            'hero_id' => 1,

            'title' => 'Arquitectura escalable',

            'description' => 'Sistemas sólidos preparados para crecer sin límites.',

            'icon' => 'fa-solid fa-rocket',

            'order_index' => 2
        ]);

        HeroHighlight::create([

            'hero_id' => 1,

            'title' => 'Rendimiento y calidad',

            'description' => 'Código limpio, seguro y optimizado para escalar.',

            'icon' => 'fa-solid fa-shield',

            'order_index' => 3
        ]);
    }
}
